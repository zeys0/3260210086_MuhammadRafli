<?php

namespace App\Controllers;

use App\Models\mahasiswaModel;

class crud extends BaseController
{
    protected $db_kampus;
    public function __construct()
    {
        $this->mahasiswaModel = new mahasiswaModel();
    }


    public function index()
    {

        $mahasiswa = $this->mahasiswaModel->getData();

        $data = [
            'mahasiswa' => $mahasiswa
        ];
        return view('CRUD/view', $data);
    }

    public function insert()
    {

        return view('CRUD/insert');
    }

    public function save()
    {

        $data = [
            'nim' => $this->request->getVar('nim'),
            'nama' => $this->request->getVar('nama'),
            'prodi' => $this->request->getVar('prodi'),
            'universitas' => $this->request->getVar('univ'),
            'no_hp' => $this->request->getVar('no_hp')
        ];
        $this->mahasiswaModel->insert($data);
        session()->setFlashData('data', 'Data berhasil ditambah');

        return redirect()->to('/crud');
    }

    public function edit($nim)
    {

        $data = [
            'mahasiswa' => $this->mahasiswaModel->getData($nim)
        ];

        return view('CRUD/edit', $data);
    }

    public function update($oldNim)
    {

        $data = [
            'nim' => $this->request->getVar('newNim'),
            'nama' => $this->request->getVar('nama'),
            'prodi' => $this->request->getVar('prodi'),
            'universitas' => $this->request->getVar('univ'),
            'no_hp' => $this->request->getVar('no_hp')

        ];


        $this->mahasiswaModel->update($oldNim, $data);

        session()->setFlashData('data', 'Data berhasil diupdate');
        return redirect()->to('/crud');
    }

    public function delete($nim)
    {

        $this->mahasiswaModel->delete($nim);
        session()->setFlashData('data', 'Data berhasil didelete');
        return redirect()->to('/crud');
    }
}
