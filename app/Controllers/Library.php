<?php

namespace App\Controllers;

use App\Models\libraryModel;

class Library extends BaseController
{
    protected $ci4;
    public function __construct()
    {

        $this->libraryModel = new libraryModel();
    }

    public function index()
    {
        $library = $this->libraryModel->getLibrary();


        $data = [
            'title' => 'Detail Komik',
            'library' => $library
        ];

        // konek db tanpa model

        // $db = \config\DATABASE::connect();
        // $library = $db->query('SELECT * FROM library');
        // foreach($library->getResultArray() as $a){

        //     d($a);
        // }
        if (empty($data['library'])) {
            throw new \CodeIgneter\Exceptions\PageNotFoundExceptions('Judul library' . $slug . 'tidak ditemukan');
        }

        return view('library/index', $data);
    }

    public function detail($slug)
    {

        $data = [
            'title' => 'Detail',
            'library' => $this->libraryModel->getLibrary($slug)
        ];

        return view('library/detail', $data);
    }

    // Insert data
    public function create()
    {
        session();
        $data = [
            'title' => 'Tambah Data',
            'validation' => \Config\Services::validation()
        ];

        return view('library/create', $data);
    }

    public function save()
    {

        // validation input

        if (!$this->validate([
            'judul' => 'required|is_unique[library.judul]'
        ])) {
            $validation = \Config\Services::validation();

            return redirect()->to('/library/create')->withInput()->with('validation', $validation);
        }


        // ambil gambar

        $fileSampul = $this->request->getFile('sampul');

        // generate nama sampul random

        $namaSampul = $fileSampul->getRandomName();

        // pindahkan file ke img

        $fileSampul->move('assets', $namaSampul);



        $slug = url_title($this->request->getVar('judul'), '-', true);

        $this->libraryModel->save([
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'penulis' => $this->request->getVar('penulis'),
            'penerbit' => $this->request->getVar('penerbit'),
            'sampul' => $namaSampul
        ]);

        session()->setFlashdata('data', 'Data berhasil ditambahkan.');

        return redirect()->to('/library');
    }

    // update data
    public function edit($slug)
    {

        $data = [
            'title' => 'Update Data',
            'library' => $this->libraryModel->getLibrary($slug)
        ];

        return view('library/update', $data);
    }

    public function update($id)
    {

        // validation input

        if (!$this->validate([
            'judul' => 'required|is_unique[library.judul]'
        ])) {
            $validation = \Config\Services::validation();

            return redirect()->to('/library/create')->withInput()->with('validation', $validation);
        }

        // ambil gambar

        $fileSampul = $this->request->getFile('sampul');

        // generate nama sampul random

        $namaSampul = $fileSampul->getRandomName();

        // pindahkan file ke img

        $fileSampul->move('assets', $namaSampul);

        $slug = url_title($this->request->getVar('judul'), '-', true);

        $this->libraryModel->save([
            'id' => $id,
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'penulis' => $this->request->getVar('penulis'),
            'penerbit' => $this->request->getVar('penerbit'),
            'sampul' => $namaSampul
        ]);

        session()->setFlashdata('data', 'Data berhasil diupdate');

        return redirect()->to('/library');
    }

    public function delete($id)
    {

        //cari gambar

        $library = $this->libraryModel->find($id);

        // hapus gambar

        unlink('assets/' . $library['sampul']);

        $this->libraryModel->delete($id);
        session()->setFlashData('data', 'Data berhasil didelete');
        return redirect()->to('/library');
    }
}
