<?php

namespace App\Controllers;

use App\Models\LoginModel;
use App\Models\PinjamModel;

class Anggota extends BaseController
{


    protected $db;
    // protected $kategoriModel;


    public function __construct()
    {
        $this->loginModel = new LoginModel();
        $this->pinjamModel = new PinjamModel();
        $this->db = db_connect();
        // $this->kategoriModel = new KategoriModel();
    }
    // Controller Anggota

    public function index()
    {
        $data = [
            'title' => 'Dashboard Anggota | Edulab',
            // 'datapinjam' => $this->db->query("SELECT * FROM tbl_login WHERE anggota_id='AG4' ")->getResultArray(),
            'join' => $this->db->query("SELECT *
            FROM tbl_pinjam
            INNER JOIN tbl_login ON tbl_login.anggota_id=tbl_pinjam.anggota_id 
            WHERE tbl_pinjam.anggota_id='AG4'
            AND status='Dipinjam';")->getResultArray()
        ];

        // dd($data);
        // die;
        return view('anggota/indexanggota', $data);
    }
    public function detailKembali()
    {
        $data = [
            'title' => 'Detail Buku Kembali | Edulab'
        ];
        return view('anggota/detailkembali', $data);
    }
    public function dataBukuDetail($buku_id)
    {

        $data = [
            'title' => ' Detail Data Buku | Edulab',
            'buku' => $this->db->query("SELECT * FROM tbl_buku
            WHERE buku_id='$buku_id';")->getResultArray(),

            'bukurak' => $this->db->query("SELECT *
            FROM tbl_rak
            INNER JOIN tbl_buku ON tbl_buku.id_rak=tbl_rak.id_rak 
            WHERE tbl_buku.buku_id='$buku_id';")->getResultArray(),

            'anggotapinjam' => $this->db->query("SELECT *
            FROM tbl_login
            INNER JOIN tbl_pinjam ON tbl_pinjam.anggota_id=tbl_login.anggota_id 
            WHERE tbl_pinjam.buku_id='$buku_id'
            AND tbl_pinjam.status='Dipinjam';")->getResultArray(),

            'countbuku' => $this->pinjamModel->countPinjam($buku_id)
        ];
        // dd($data);
        // die;
        return view('anggota/databukudetail', $data);
    }
    public function dataBukuAnggota()
    {
        $data = [
            'title' => 'Data Buku | Edulab',
            'buku' =>  $this->db->query("SELECT * FROM tbl_buku;")->getResultArray()
        ];
        return view('anggota/databuku', $data);
    }
    public function detailPinjam($pinjam_id)
    {

        $pinjamModel = new \App\Models\PinjamModel();
        $pinjam = $pinjamModel->getPinjam($pinjam_id);

        $data = [
            'title' => 'Detail Peminjaman | Edulab',
            'peminjaman' => $pinjam,
            'joinanggota' => $this->db->query("SELECT *
            FROM tbl_login
            INNER JOIN tbl_pinjam ON tbl_login.anggota_id=tbl_pinjam.anggota_id 
            WHERE tbl_login.anggota_id='AG4';")->getResultArray(),


            'joinbuku' => $this->db->query("SELECT *
            FROM tbl_buku
            INNER JOIN tbl_pinjam ON tbl_buku.buku_id=tbl_pinjam.buku_id 
            WHERE tbl_buku.buku_id='BK2';")->getResultArray()
        ];
        // dd($data);
        // die;
        return view('anggota/detailpinjam', $data);
    }
    public function profileAnggota()
    {

        $dataAnggota = $this->loginModel->getLoginInfo('sandrian');
        // dd($profile);
        $data = [
            'title' => 'Data Anggota | Edulab',
            'datauser' => $dataAnggota,
            'validation' => \Config\Services::validation()
        ];
        return view('anggota/profile', $data);
    }
    public function editUser()
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
            'telepon' => $this->request->getVar('nama'),
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
        return redirect()->to('../anggota/profileAnggota');
    }


    public function pengembalianBuku()
    {
        $data = [
            'title' => 'Pengembalian Buku | Edulab',
            'join' => $this->db->query("SELECT *
            FROM tbl_pinjam
            INNER JOIN tbl_login ON tbl_login.anggota_id=tbl_pinjam.anggota_id 
            WHERE tbl_pinjam.anggota_id='AG4' 
            AND status='Dikembalikan';")->getResultArray()
        ];
        return view('anggota/pengembalianbuku', $data);
    }

    public function print()
    {
        $data = [
            'title' => 'Cetak Kartu | Edulab'
        ];
        return view('anggota/print', $data);
    }
}
