<?php

namespace App\Controllers;

use App\Models\komikModel;

class Comics extends BaseController
{
    protected $ci4;
    public function __construct()
    {

        $this->komikModel = new komikModel();
    }

    public function index()
    {
        $komik = $this->komikModel->getKomik();


        $data = [
            'title' => 'Detail Komik',
            'komik' => $komik
        ];

        // konek db tanpa model

        // $db = \config\DATABASE::connect();
        // $komik = $db->query('SELECT * FROM komik');
        // foreach($komik->getResultArray() as $a){

        //     d($a);
        // }
        if (empty($data['komik'])) {
            throw new \CodeIgneter\Exceptions\PageNotFoundExceptions('Judul komik' . $slug . 'tidak ditemukan');
        }

        return view('komik/index', $data);
    }

    public function detail($slug)
    {

        $data = [
            'title' => 'Detail',
            'komik' => $this->komikModel->getKomik($slug)
        ];

        return view('komik/detail', $data);
    }

    // Insert data
    public function create()
    {

        $data = [
            'title' => 'Tambah Data'
        ];

        return view('komik/create', $data);
    }

    public function save()
    {

        $slug = url_title($this->request->getVar('judul'), '-', true);

        $this->komikModel->save([
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'sampul' => $this->request->getVar('sampul'),
            'penulis' => $this->request->getVar('penulis'),
            'penerbit' => $this->request->getVar('penerbit'),
        ]);

        session()->setFlashdata('data', 'Data berhasil ditambahkan.');

        return redirect()->to('/comics');
    }

    // update data
    public function edit($slug)
    {

        $data = [
            'title' => 'Update Data',
            'komik' => $this->komikModel->getKomik($slug)
        ];

        return view('komik/update', $data);
    }

    public function update($id)
    {

        $slug = url_title($this->request->getVar('judul'), '-', true);

        $this->komikModel->save([
            'id' => $id,
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'sampul' => $this->request->getVar('sampul'),
            'penulis' => $this->request->getVar('penulis'),
            'penerbit' => $this->request->getVar('penerbit')
        ]);

        session()->setFlashdata('data', 'Data berhasil diupdate');

        return redirect()->to('/comics');
    }
}
