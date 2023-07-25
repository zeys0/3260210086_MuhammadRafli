<?php

namespace App\Models;

use CodeIgniter\Model;

class libraryModel extends Model
{

    protected $table =  "library";
    protected $primarykey= "id" ;
    protected $useTimestamps = true;
    protected $allowedFields = ['judul', 'sampul', 'penulis', 'penerbit', 'slug', 'id'];

    public function getLibrary($slug = false){
        
      if($slug == false){

        return $this->findAll();
    
    }
    
      return $this->where(['slug'=>$slug])->first();
    
    }

   

}