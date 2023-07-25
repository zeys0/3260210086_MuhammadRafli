<?php

namespace App\Models;

use CodeIgniter\Model;

class mahasiswaModel extends Model
{

  protected $table = "mahasiswa";
  protected $primaryKey = "nim";

  protected $allowedFields = [
    'nim',
    'nama',
    'prodi',
    'universitas',
    'no_hp'
  ];


  public function getData($nim = false)
  {
    if ($nim == false) {

      return $this->findAll();
    }

    return $this->where(['nim' => $nim])->first();
  }
}
