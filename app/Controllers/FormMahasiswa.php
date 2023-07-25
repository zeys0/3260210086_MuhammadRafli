<?php
namespace App\Controllers;

class FormMahasiswa extends BaseController
{
    public function InputView(){
        $data = [
            'title'=> ("Input | Muhammad Rafli")
        ];
        
    return view('FORM/Form', $data);
} 
   public function ResultView(){
    
    $nama = $this->request->getPost('nama');
    $nim = $this->request->getPost('nim');
    $kelas = $this->request->getPost('kelas');
    $matkul = $this->request->getPost('matkul');
    $dosen = $this->request->getPost('dosen');
    $asisten = $this->request->getPost('asisten');
   
    $data = [
        'nama'=> $nama,
        'nim'=> $nim,
        'kelas'=> $kelas,
        'matkul'=> $matkul,
        'dosen'=> $dosen,
        'asisten'=> $asisten,
        'title'=>('Result | Muhammad Rafli')
    ];

    return view('FORM/Result', $data);

    }
}
?>