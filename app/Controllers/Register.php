<?php

namespace App\Controllers;

use App\Models\LoginModel;
use App\Models\UsersModel;

class Register extends BaseController
{

    public function __construct()
    {
        $this->loginModel = new LoginModel();
        $this->db = db_connect();
        // $this->kategoriModel = new KategoriModel();
    }
    protected $pinjamModel;
    public function index()
    {
        $data = [
            'title' => 'Register | Edulab'
        ];
        return view('register', $data);
    }

    public function process()
    {
        if (!$this->validate([
            'username' => [
                'rules' => 'required|min_length[4]|max_length[20]|is_unique[tbl_login.user]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 4 Karakter',
                    'max_length' => '{field} Maksimal 20 Karakter',
                    'is_unique' => 'Username sudah digunakan sebelumnya'
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[4]|max_length[50]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 4 Karakter',
                    'max_length' => '{field} Maksimal 50 Karakter',
                ]
            ],
            'passwordUlang' => [
                'rules' => 'matches[password]',
                'errors' => [
                    'matches' => 'Konfirmasi Password tidak sesuai dengan password',
                ]
            ],
            'nama' => [
                'rules' => 'required|min_length[4]|max_length[100]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 4 Karakter',
                    'max_length' => '{field} Maksimal 100 Karakter',
                ]
            ],
            'email' => [
                'rules' => 'required|is_unique[tbl_login.email]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'is_unique' => 'email sudah digunakan sebelumnya'
                ]
            ],
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        $users = new LoginModel();
        $users->insert([
            'anggota_id' => $this->loginModel->buat_kode('AG', 'id_login', 'DESC', '1'),
            'user' => $this->request->getVar('username'),
            'pass' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
            'nama' => $this->request->getVar('nama'),
            'email' => $this->request->getVar('email'),
            'level' => 'Anggota'
        ]);
        return redirect()->to('/login');
    }
}
