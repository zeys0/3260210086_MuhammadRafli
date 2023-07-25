<?php

namespace App\Controllers;

class pagesPrak extends BaseController
{
    public function index(){
    
      
        return view('PagesPrak/Rafli_32602100086');
        
        
    }
    public function About(){
    
      
        return view('PagesPrak/About');
        
        
    }
    public function Experience()
    {
      
        return view('PagesPrak/Experience');
        
        
    }
}