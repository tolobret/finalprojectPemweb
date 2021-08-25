<?php

namespace App\Controllers;

class Dashboard extends BaseController
{

    // Controller Petugas

    public function index()
    {
        $data = [
            'title' => 'Dashboard | Edulab'
        ];
        return view('petugas/index', $data);
    }

    public function dataAnggota()
    {
        $data = [
            'title' => 'Data Anggota | Edulab'
        ];
        return view('petugas/dataanggota', $data);
    }

    public function transaksi()
    {
        $data = [
            'title' => 'Transaksi | Edulab'
        ];
        return view('petugas/transaksi', $data);
    }
    public function dataBuku()
    {
        $data = [
            'title' => 'Data Buku | Edulab'
        ];
        return view('petugas/databuku', $data);
    }
    public function kategori()
    {
        $data = [
            'title' => 'Kategori Buku| Edulab'
        ];
        return view('petugas/kategori', $data);
    }
    public function rak()
    {
        $data = [
            'title' => 'Rak Buku | Edulab'
        ];
        return view('petugas/rak', $data);
    }
    public function profile()
    {
        $data = [
            'title' => 'Edit Anggota | Edulab'
        ];
        return view('petugas/profile', $data);
    }
    public function editBuku()
    {
        $data = [
            'title' => 'Edit Buku | Edulab'
        ];
        return view('petugas/editbuku', $data);
    }
    public function detailBuku()
    {
        $data = [
            'title' => 'Detail Data Buku | Edulab'
        ];
        return view('petugas/detailbuku', $data);
    }
    public function tambahUser()
    {
        $data = [
            'title' => 'Tambah Data User | Edulab'
        ];
        return view('petugas/tambahuser', $data);
    }
    public function tambahBuku()
    {
        $data = [
            'title' => 'Tambah Data Buku | Edulab'
        ];
        return view('petugas/tambahbuku', $data);
    }



    // Controller Anggota

    public function indexAnggota()
    {
        $data = [
            'title' => 'Dashboard Anggota | Edulab'
        ];
        return view('anggota/indexanggota', $data);
    }
    public function detailKembali()
    {
        $data = [
            'title' => 'Detail Buku Kembali | Edulab'
        ];
        return view('anggota/detailkembali', $data);
    }
    public function dataBukuDetail()
    {
        $data = [
            'title' => ' Detail Data Buku | Edulab'
        ];
        return view('anggota/databukudetail', $data);
    }
    public function dataBukuAnggota()
    {
        $data = [
            'title' => 'Data Buku | Edulab'
        ];
        return view('anggota/databuku', $data);
    }
    public function detailPinjam()
    {
        $data = [
            'title' => 'Detail Peminjaman | Edulab'
        ];
        return view('anggota/detailpinjam', $data);
    }
    public function profileAnggota()
    {
        $data = [
            'title' => 'Profile | Edulab'
        ];
        return view('anggota/profile', $data);
    }
    public function pengembalianBuku()
    {
        $data = [
            'title' => 'Pengembalian Buku | Edulab'
        ];
        return view('anggota/pengembalianbuku', $data);
    }



    // Controller Admin
    public function indexAdmin()
    {
        $data = [
            'title' => 'Dashboard Administrator | Edulab'
        ];
        return view('admin/indexadmin', $data);
    }
    public function adminDataAnggota()
    {
        $data = [
            'title' => 'Daftar Data Anggota | Edulab'
        ];
        return view('admin/admindataanggota', $data);
    }
    public function tambahUserAdmin()
    {
        $data = [
            'title' => 'Tambah User | Edulab'
        ];
        return view('admin/tambahuser', $data);
    }
    public function tambahPetugasAdmin()
    {
        $data = [
            'title' => 'Tambah Petugas | Edulab'
        ];
        return view('admin/tambahpetugas', $data);
    }
    public function profileAdmin()
    {
        $data = [
            'title' => 'Edit Profile | Edulab'
        ];
        return view('admin/profile', $data);
    }






    public function print()
    {
        $data = [
            'title' => 'Cetak Kartu | Edulab'
        ];
        return view('print', $data);
    }
}
