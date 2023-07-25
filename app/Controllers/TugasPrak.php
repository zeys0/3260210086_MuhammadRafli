<?php

namespace App\Controllers;

class TugasPrak extends BaseController
{
    public function index(){
    
      
        return view('PagesAndhi/Home');
        
        
    }

    public function about(){
    
      
        return view('PagesAndhi/About');
        
        
    }

    public function experience(){
    
      
        return view('PagesAndhi/Experience');
        
        
    }
}