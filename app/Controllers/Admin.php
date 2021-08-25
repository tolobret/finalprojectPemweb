<?php

namespace App\Controllers;

use App\Models\LoginModel;
use App\Models\PinjamModel;
use App\Controllers\BaseController;

class Admin extends BaseController
{

    protected $db;
    // protected $kategoriModel;
    // Controller Admin

    public function __construct()
    {

        $this->loginModel = new LoginModel();
        $this->pinjamModel = new PinjamModel();
        $this->db = db_connect();

        // $this->kategoriModel = new KategoriModel();
    }


    public function index()
    {
        // $anggota_id = session()->get('level');
        if (session()->get('level') == 'Petugas') {
            return redirect()->to('/login/index');
        } else if (session()->get('level') == 'Anggota') {
            return redirect()->to('/login/index');
        }
        $data = [
            'title' => 'Dashboard Administrator | Edulab',
            'segment' => $this->request->uri->getSegment(1),
            'petugas' => $this->db->query("SELECT * FROM tbl_login
            WHERE Level='Petugas';")->getResultArray(),
        ];
        // dd($data);
        // die;
        return view('admin/indexadmin', $data);
    }
    public function adminDataAnggota()
    {
        $data = [
            'title' => 'Daftar Data Anggota | Edulab',
            'anggota' => $this->db->query("SELECT * FROM tbl_login
            WHERE Level= 'Anggota';")->getResultArray(),
            'segment' => $this->request->uri->getSegment(2),
        ];
        return view('admin/admindataanggota', $data);
    }
    public function tambahUser()
    {
        $data = [
            'title' => 'Tambah User | Edulab',
            'validation' => \Config\Services::validation(),
            'segment' => $this->request->uri->getSegment(2),
        ];
        return view('admin/tambahuser', $data);
    }

    public function tambahPetugas()
    {
        $data = [
            'title' => 'Tambah Petugas | Edulab',
            'segment' => $this->request->uri->getSegment(2),
            'validation' => \Config\Services::validation()
        ];
        return view('admin/tambahpetugas', $data);
    }

    public function save()
    {

        if (!$this->validate([
            'user' => [
                'rules' => 'required|is_unique[tbl_login.user]',
                'errors' => [
                    'required' => 'username harus diisi',
                    'is_unique' => 'username sudah terdaftar'
                ]
            ],
            'foto' => [
                'rules' => 'max_size[foto,5120]',
                'errors' => [
                    'max_size' => 'Ukuran foto maksimal 5MB',
                ]
            ]
        ])) {
            // $validation = \Config\Services::validation();

            return redirect()->to('../admin/tambahpetugas')->withInput();
        }

        // ambil file foto

        $fileFoto = $this->request->getFile('foto');

        if ($fileFoto->getError() == 4) {
            $namaFoto = 'default.png';
        } else {
            $namaFoto = $fileFoto->getRandomName();
            // pindah foto ke folder img
            $fileFoto->move('img', $namaFoto);
            // random filename

        }

        $this->loginModel->save([

            'anggota_id' => $this->loginModel->buat_kode('AG', 'id_login', 'DESC', '1'),
            'nama' => $this->request->getVar('nama'),
            'telepon' => $this->request->getVar('telepon'),
            'tempat_lahir' => $this->request->getVar('tempat_lahir'),
            'email' => $this->request->getVar('email'),
            'tgl_lahir' => $this->request->getVar('tgl_lahir'),
            'user' => $this->request->getVar('user'),
            'alamat' => $this->request->getVar('alamat'),
            'pass' => $this->request->getVar('pass'),
            'level' => $this->request->getVar('level'),
            'jenkel' => $this->request->getVar('flexRadioDefault'),
            'foto' => $namaFoto,

        ]);
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');
        if ($this->request->getVar('segment') == 'anggota') {
            return redirect()->to('../admin/admindataanggota');
        }
        return redirect()->to('../admin/index');
    }


    public function profilepetugas($user)
    {
        $profile = $this->loginModel->getLoginInfo($user);
        $data = [
            'title' => 'Edit Profile | Edulab',
            'segment' => $this->request->uri->getSegment(2),
            'petugas' => $profile
        ];
        return view('admin/profile', $data);
    }
    public function profileanggota($user)
    {
        $profile = $this->loginModel->getLoginInfo($user);
        $data = [
            'title' => 'Edit Profile | Edulab',
            'segment' => $this->request->uri->getSegment(2),
            'petugas' => $profile
        ];
        return view('admin/profile', $data);
    }

    public function editPetugas()
    {

        $fileFoto = $this->request->getFile('foto');

        if ($fileFoto->getError() == 4) {
            $namaFoto = 'default.png';
        } else {
            $namaFoto = $fileFoto->getRandomName();
            // pindah foto ke folder img
            $fileFoto->move('img', $namaFoto);
            // random filename

        }
        $this->loginModel->save([

            'id_login' => $this->request->getVar('id'),
            'nama' => $this->request->getVar('nama'),
            'telepon' => $this->request->getVar('telepon'),
            'tempat_lahir' => $this->request->getVar('tempat_lahir'),
            'email' => $this->request->getVar('email'),
            'tgl_lahir' => $this->request->getVar('tgl_lahir'),
            'user' => $this->request->getVar('user'),
            'alamat' => $this->request->getVar('alamat'),
            'pass' => $this->request->getVar('pass'),
            'jenkel' => $this->request->getVar('flexRadioDefault'),
            'foto' => $namaFoto,

        ]);
        session()->setFlashdata('pesan', 'Data berhasil diubah.');
        return redirect()->to('../admin/index');
    }

    public function delPetugas($user)
    {

        $this->loginModel->delLoginInfo($user);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        if ($this->request->getVar('segment') == 'anggota') {
            return redirect()->to('../admin/admindataanggota');
        }
        return redirect()->to('../admin/index');
    }
}
