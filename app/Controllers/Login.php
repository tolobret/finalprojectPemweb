<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\LoginModel;

class Login extends BaseController
{
    public function __construct()
    {
        $this->loginModel = new LoginModel();
        $this->db = db_connect();
        // $this->kategoriModel = new KategoriModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Login | Edulab'
        ];
        return view('login', $data);
    }

    public function process()
    {
        $users = new LoginModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $dataUser = $users->where([
            'email' => $email,
        ])->first();
        if ($dataUser) {
            if (password_verify($password, $dataUser['pass']) && $dataUser['level'] == 'Petugas') {
                session()->set([
                    'email' => $dataUser['email'],
                    'nama' => $dataUser['nama'],
                    'foto' => $dataUser['foto'],
                    'level' => $dataUser['level'],
                    'logged_in' => TRUE
                ]);
                return redirect()->to(base_url('petugas'));
            } else if (password_verify($password, $dataUser['pass']) && $dataUser['level'] == 'Anggota') {
                session()->set([
                    'email' => $dataUser['email'],
                    'anggota_id' => $dataUser['anggota_id'],
                    'nama' => $dataUser['nama'],
                    'foto' => $dataUser['foto'],
                    'level' => $dataUser['level'],
                    'logged_in' => TRUE
                ]);
                return redirect()->to(base_url('anggota'));
            } else if (password_verify($password, $dataUser['pass']) && $dataUser['level'] == 'Admin') {
                session()->set([
                    'email' => $dataUser['email'],
                    'nama' => $dataUser['nama'],
                    'foto' => $dataUser['foto'],
                    'level' => $dataUser['level'],
                    'logged_in' => TRUE
                ]);
                return redirect()->to(base_url('admin'));
            } else {
                session()->setFlashdata('error', 'Email & Password Salah');
                return redirect()->back();
            }
        } else {
            session()->setFlashdata('error', 'Email & Password Salah');
            return redirect()->back();
        }
    }
    function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
