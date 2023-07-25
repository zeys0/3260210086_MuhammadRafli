<?php

namespace App\Controllers;

class pages extends BaseController
{
    public function index()
    {
        $data = [
            'title'=> ('HOME | MuhammadRafli')
        ];
      
        return view('Pages/Home', $data);
        
        
    }
    public function about(){
        
        $data = [
            'title'=> ('ABOUT | MuhammadRafli')
        ];
    
    return view('Pages/About', $data);

    }

    public function contact(){

        $data = [
            'title' => ('CONTACT | MuhammadRafli'),
            'Alamat'=>[
                [
                'Nama' => ('Muhammad Rafli'), 
                'Alamat' => ('East Borneo, North Penajam'), 
                'Email' => ('muhammad.rafli@gmail.com')
                ]
            ]

        ];
        
        return view('Pages/Contact', $data);

    }
    
}