<?php

namespace App\Controllers;

use App\Models\LoginModel;
use App\Models\PinjamModel;
use App\Controllers\Petugas;
use Config\App;

class Anggota extends BaseController
{


    protected $db;
    // protected $kategoriModel;


    public function __construct()
    {
        $this->loginModel = new LoginModel();
        $this->pinjamModel = new PinjamModel();
        $this->db = db_connect();
        $this->hitungDenda();
        // $this->kategoriModel = new KategoriModel();
    }
    // Controller Anggota

    public function index()
    {

        if (session()->get('level') == 'Petugas') {
            return redirect()->to('/login/index');
        } else if (session()->get('level') == 'Admin') {
            return redirect()->to('/login/index');
        }

        $anggota_id = session()->get('anggota_id');
        // dd($id_login);
        $data = [
            'title' => 'Dashboard Anggota | Edulab',
            'segment' => $this->request->uri->getSegment(1),
            'join' => $this->db->query("SELECT *
            FROM tbl_pinjam
            INNER JOIN tbl_login ON tbl_login.anggota_id=tbl_pinjam.anggota_id 
            INNER JOIN tbl_denda ON tbl_denda.pinjam_id=tbl_pinjam.pinjam_id 
            WHERE tbl_pinjam.status='Dipinjam'
            AND tbl_pinjam.anggota_id='$anggota_id';")->getResultArray()
        ];

        // dd($data);
        // die;
        return view('anggota/indexanggota', $data);
    }
    public function detailKembali($pinjam_id)
    {

        $pinjamModel = new \App\Models\PinjamModel();
        $pinjam = $pinjamModel->getPinjam($pinjam_id);

        $data = [
            'title' => 'Detail Peminjaman | Edulab',
            'peminjaman' => $pinjam,
            'segment' => $this->request->uri->getSegment(2),
            'joinanggota' => $this->db->query("SELECT *
            FROM tbl_login
            INNER JOIN tbl_pinjam ON tbl_login.anggota_id=tbl_pinjam.anggota_id 
            WHERE tbl_pinjam.pinjam_id='$pinjam_id';")->getResultArray(),


            'joinbuku' => $this->db->query("SELECT *
            FROM tbl_buku
            INNER JOIN tbl_pinjam ON tbl_buku.buku_id=tbl_pinjam.buku_id 
            WHERE tbl_pinjam.pinjam_id='$pinjam_id';")->getResultArray()
        ];
        // dd($data);
        // die;
        return view('anggota/detailpinjam', $data);
    }
    public function dataBukuDetail($buku_id)
    {

        $data = [
            'title' => ' Detail Data Buku | Edulab',
            'segment' => $this->request->uri->getSegment(2),
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
            'segment' => $this->request->uri->getSegment(2),
            'buku' =>  $this->db->query("SELECT * FROM tbl_buku WHERE jml>0 ;")->getResultArray()
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
            'segment' => $this->request->uri->getSegment(2),
            'joinanggota' => $this->db->query("SELECT *
            FROM tbl_login
            INNER JOIN tbl_pinjam ON tbl_login.anggota_id=tbl_pinjam.anggota_id 
            WHERE tbl_pinjam.pinjam_id='$pinjam_id';")->getResultArray(),


            'joinbuku' => $this->db->query("SELECT *
            FROM tbl_buku
            INNER JOIN tbl_pinjam ON tbl_buku.buku_id=tbl_pinjam.buku_id 
            WHERE tbl_pinjam.pinjam_id='$pinjam_id';")->getResultArray()
        ];
        // dd($data);
        // die;
        return view('anggota/detailpinjam', $data);
    }



    public function profileAnggota()
    {
        $anggota_id = session()->get('anggota_id');
        $dataAnggota = $this->db->query("SELECT * FROM tbl_login
        WHERE anggota_id='$anggota_id';")->getResultArray();
        // dd($dataAnggota);
        $data = [
            'title' => 'Data Anggota | Edulab',
            'segment' => $this->request->uri->getSegment(2),
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
        return redirect()->to('../anggota/profileAnggota');
    }


    public function pengembalianBuku()
    {
        $anggota_id = session()->get('anggota_id');
        $data = [
            'title' => 'Pengembalian Buku | Edulab',
            'segment' => $this->request->uri->getSegment(2),
            // 'join' => $this->db->query("SELECT *
            // FROM tbl_pinjam
            // INNER JOIN tbl_login ON tbl_login.anggota_id=tbl_pinjam.anggota_id 
            // WHERE tbl_pinjam.anggota_id='AG4' 
            // AND status='Dikembalikan';")->getResultArray()
            'join' => $this->db->query("SELECT *
            FROM tbl_pinjam
            INNER JOIN tbl_login ON tbl_login.anggota_id=tbl_pinjam.anggota_id 
            INNER JOIN tbl_denda ON tbl_denda.pinjam_id=tbl_pinjam.pinjam_id 
            WHERE tbl_pinjam.status='Dikembalikan'
            AND tbl_pinjam.anggota_id='$anggota_id';")->getResultArray()


        ];
        return view('anggota/pengembalianbuku', $data);
    }
    public function hitungDenda()
    {
        $dendaModel = new \App\Models\DendaModel();

        $join = $this->db->query("SELECT *
            FROM tbl_pinjam
            INNER JOIN tbl_denda ON tbl_pinjam.pinjam_id=tbl_denda.pinjam_id
            WHERE tbl_pinjam.status='Dipinjam';")->getResultArray();

        $biaya_denda = $this->db->query("SELECT *
        FROM tbl_biaya_denda;")->getResultArray();

        foreach ($join as $key) {
            $tanggal_kembali = strtotime($key['tgl_kembali']);
            $tanggal_sekarang = strtotime(gmdate("d-m-Y"));
            $diff = ($tanggal_sekarang - $tanggal_kembali) / 60 / 60 / 24;

            if ($diff > 0) {
                $dendaModel->save([
                    'id_denda' =>  $key['id_denda'],
                    'pinjam_id' =>  $key['pinjam_id'],
                    'denda' => $diff * $biaya_denda['0']['harga_denda'],
                    'lama_waktu' => $diff
                ]);
            }
        }
    }

    public function print()
    {
        $anggota_id = session()->get('anggota_id');
        $dataAnggota = $this->db->query("SELECT * FROM tbl_login
        WHERE anggota_id='$anggota_id';")->getResultArray();
        // dd($dataAnggota);
        $data = [
            'title' => 'Cetak Kartu | Edulab',
            'datauser' => $dataAnggota,
        ];
        return view('anggota/print', $data);
    }
}
