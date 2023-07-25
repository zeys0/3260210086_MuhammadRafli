<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function index()

    {
        $data = [
            'title' => 'Login'
        ];

        return view('auth/login', $data);
    }

    public function register()
    {
        helper(['form']);
        session();
        $data = [
            'title' => 'Register',

        ];

        return view('auth/register', $data);
    }

    public function getRegister()
    {

        $validation = \Config\Services::validation();

        // Definisikan aturan validasi untuk setiap field
        $rules = [
            'name' => 'required|min_length[3]',
            'email' => 'required|valid_email|is_unique[users.email]',
            'password1' => 'required|min_length[6]',
            'password2' => 'required|matches[password1]',
        ];

        if ($this->validate($rules)) {

            $data = [
                'name' => $this->request->getVar('name'),
                'password1' => $this->request->getVar('password1'),
                'password2' => $this->request->getVar('password2'),
                'email' => $this->request->getVar('email')
            ];

            return redirect()->to('/auth')->with('success', 'Registrasi berhasil! Silakan masuk.');
        } else {
            // Data tidak valid, tampilkan pesan error kembali ke pengguna
            return view('auth/register', ['validation' => $validation]);
        }
    }
}
