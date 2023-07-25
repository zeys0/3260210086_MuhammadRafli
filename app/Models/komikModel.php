<?php

namespace App\Models;

use CodeIgniter\Model;

class komikModel extends Model
{

    protected $table =  "komik";
    protected $primarykey= "id" ;
    protected $useTimestamps = true;
    protected $allowedFields = ['judul', 'sampul', 'penulis', 'penerbit', 'slug', 'id'];

    public function getKomik($slug = false){
        
      if($slug == false){

        return $this->findAll();
    
    }
    
      return $this->where(['slug'=>$slug])->first();
    
    }

   

}