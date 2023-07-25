<?php

namespace App\Controllers;

class Tugas extends BaseController
{
    public function index(){
    
      
        return view('PagesTugas/Home');
        
        
    }

    public function about(){
    
      
        return view('PagesTugas/About');
        
        
    }

    public function experience(){
    
      
        return view('PagesTugas/Experience');
        
        
    }
}