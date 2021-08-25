<?php

namespace App\Controllers;

use App\Models\KategoriModel;
use App\Models\LoginModel;
use App\Models\RakModel;
use CodeIgniter\Model;
use Config\App;

class Petugas extends BaseController
{
    protected $loginModel;
    protected $db;
    // protected $kategoriModel;


    public function __construct()
    {
        $this->loginModel = new LoginModel();
        $this->db = db_connect();
        // $this->kategoriModel = new KategoriModel();
    }
    // Controller Petugas

    public function index()
    {
        $count_anggota = $this->loginModel->countAnggota();
        $count_buku = new \App\Models\BukuModel();
        $count_pinjam = new \App\Models\PinjamModel();

        $data = [
            'title' => 'Dashboard | Edulab',
            'count_anggota' => $count_anggota,
            'count_buku' => $count_buku->countBuku(),
            'count_pinjam' => $count_pinjam->countPinjam(),
            'count_kembali' => $count_pinjam->countKembali()
        ];
        return view('petugas/index', $data);
    }

    public function dataAnggota()
    {

        $data = [
            'title' => 'Data Anggota | Edulab',
            'data' => $this->loginModel->getLoginInfo()
        ];

        return view('petugas/dataanggota', $data);
    }

    public function transaksi()
    {
        $pinjamModel = new \App\Models\PinjamModel();
        $data = [
            'title' => 'Transaksi | Edulab',
            'nopinjam' => $pinjamModel->buat_kode('PJ', 'id_pinjam', 'DESC', '1'),
            'user' => $this->db->query("SELECT * FROM tbl_login WHERE level='Anggota' ")->getResultArray(),
            'buku' => $this->db->query("SELECT * FROM tbl_buku")->getResultArray(),
        ];
        return view('petugas/transaksi', $data);
    }
    public function dataBuku()
    {
        $bukuModel = new \App\Models\BukuModel();
        $data = [
            'title' => 'Data Buku | Edulab',
            'buku' => $bukuModel->getBuku()
        ];
        // dd($data);
        // die;
        return view('petugas/databuku', $data);
    }
    public function kategori()
    {
        $kategoriModel = new \App\Models\KategoriModel();
        $listKategori = $kategoriModel->getKategori();
        // session();
        $data = [
            'title' => 'Kategori Buku| Edulab',
            'data' => $listKategori,
            'validation' => \Config\Services::validation()
        ];
        return view('petugas/kategori', $data);
    }

    public function saveKategori()
    {

        $kategoriModel = new \App\Models\KategoriModel();
        if (!$this->validate([
            'nama' => [
                'rules' => 'required|is_unique[tbl_kategori.nama_kategori]',
                'errors' => [
                    'required' => '{field} kategori harus diisi.',
                    'is_unique' => '{field} kategori sudah ada.'
                ]
            ]

        ])) {
            // $validation = \Config\Services::validation();
            // return redirect()->to('../petugas/kategori')->withInput()->with('validation', $validation);
            return redirect()->to('../petugas/kategori')->withInput();
        }
        $kategoriModel->save([
            'nama_kategori' => $this->request->getVar('nama')
        ]);
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');
        return redirect()->to('../petugas/kategori');
    }

    public function delKategori($kategori)
    {
        $kategoriModel = new \App\Models\KategoriModel();
        $kategoriModel->delKategori($kategori);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('../petugas/kategori');
    }
    public function editKategori()
    {
        $kategoriModel = new \App\Models\KategoriModel();
        $nama = $this->request->getVar('data-nama');
        $id = $this->request->getVar('data-id');

        if (!$this->validate([
            'data-nama' => [
                'rules' => 'required|is_unique[tbl_kategori.nama_kategori]',
                'errors' => [
                    'required' => 'nama kategori harus diisi.',
                    'is_unique' => 'nama kategori sudah ada.'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            session()->setFlashdata('pesan-gagal', 'Data gagal diubah. Mohon periksa kembali');
            return redirect()->to('../petugas/kategori')->withInput()->with('validation', $validation);
        }
        $kategoriModel->editKategori($id, $nama);
        session()->setFlashdata('pesan', 'Data berhasil diubah.');
        return redirect()->to('../petugas/kategori');
    }

    // 
    // Method Rak
    // 

    public function rak()
    {
        $rakModel = new \App\Models\RakModel();
        $listRak = $rakModel->getRak();
        $data = [
            'title' => 'Rak Buku | Edulab',
            'data' => $listRak,
            'validation' => \Config\Services::validation()
        ];
        return view('petugas/rak', $data);
    }
    public function saveRak()
    {

        $kategoriModel = new \App\Models\RakModel();
        if (!$this->validate([
            'nama' => [
                'rules' => 'required|is_unique[tbl_rak.nama_rak]',
                'errors' => [
                    'required' => '{field} rak harus diisi.',
                    'is_unique' => '{field} rak sudah ada.'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            // session()->setFlashdata('pesan', 'Data gagal ditambahkan. Mohon periksa kembali');
            return redirect()->to('../petugas/rak')->withInput()->with('validation', $validation);
        }
        $kategoriModel->save([
            'nama_rak' => $this->request->getVar('nama')
        ]);
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');
        return redirect()->to('../petugas/rak');
    }

    public function delRak($rak)
    {
        $rakModel = new \App\Models\RakModel();
        $rakModel->delRak($rak);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('../petugas/rak');
    }
    public function editRak()
    {
        $rakModel = new \App\Models\RakModel();
        $nama = $this->request->getVar('data-nama');
        $id = $this->request->getVar('data-id');

        if (!$this->validate([
            'data-nama' => [
                'rules' => 'required|is_unique[tbl_rak.nama_rak]',
                'errors' => [
                    'required' => 'nama rak harus diisi.',
                    'is_unique' => 'nama rak sudah ada.'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            session()->setFlashdata('pesan-gagal', 'Data gagal diubah. Mohon periksa kembali');
            return redirect()->to('../petugas/rak')->withInput()->with('validation', $validation);
        }
        $rakModel->editRak($id, $nama);
        session()->setFlashdata('pesan', 'Data berhasil diubah.');
        return redirect()->to('../petugas/rak');
    }

    public function profile($user)
    {
        // echo $user;
        $profile = $this->loginModel->getLoginInfo($user);
        // dd($profile);
        $data = [
            'title' => 'Edit Anggota | Edulab',
            'datauser' => $profile,
            'validation' => \Config\Services::validation()
        ];
        return view('petugas/profile', $data);
    }
    public function delUser($user)
    {
        $this->loginModel->delLoginInfo($user);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('../petugas/dataanggota');
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
        return redirect()->to('../petugas/dataanggota');
    }
    public function ubahBuku($id_buku)
    {
        $modelbuku = new \App\Models\BukuModel();
        $databuku = $modelbuku->getBuku($id_buku);
        $data = [
            'title' => 'Edit Buku | Edulab',
            'databuku' => $databuku,
            'kategori' => $this->db->query("SELECT * FROM tbl_kategori ORDER BY id_kategori ASC")->getResultArray(),
            'rak' => $this->db->query("SELECT * FROM tbl_rak ORDER BY id_rak ASC")->getResultArray(),
            'join' => $this->db->query("SELECT tbl_kategori.id_kategori, tbl_kategori.nama_kategori
            FROM tbl_kategori
            INNER JOIN tbl_buku ON tbl_kategori.id_kategori=tbl_buku.id_kategori
            AND tbl_buku.id_buku = $id_buku;")->getResultArray()
        ];
        // dd($data);
        // die;
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
            'title' => 'Tambah Data User | Edulab',
            'validation' => \Config\Services::validation()
        ];
        return view('petugas/tambahuser', $data);
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

            return redirect()->to('../petugas/tambahuser')->withInput();
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
            'telepon' => $this->request->getVar('nama'),
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
        return redirect()->to('../petugas/tambahuser');
    }

    public function tambahBuku()
    {
        $bukuModel = new \App\Models\BukuModel();

        $data = [
            'title' => 'Tambah Data Buku | Edulab',
            'kategori' => $this->db->query("SELECT * FROM tbl_kategori ORDER BY id_kategori ASC")->getResultArray(),
            'rak' => $this->db->query("SELECT * FROM tbl_rak ORDER BY id_rak ASC")->getResultArray(),
        ];

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');
        // return redirect()->to('../petugas/tambahbuku')->withInput();
        return view('petugas/tambahbuku', $data);
    }

    public function saveBuku()
    {
        $bukuModel = new \App\Models\BukuModel();
        if (!$this->validate([
            'title' => [
                'rules' => 'required|is_unique[tbl_buku.title]',
                'errors' => [
                    'required' => '{field} buku harus diisi.',
                    'is_unique' => '{field} buku sudah ada.'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            // session()->setFlashdata('pesan', 'Data gagal ditambahkan. Mohon periksa kembali');
            return redirect()->to('../petugas/tambahbuku')->withInput()->with('validation', $validation);
        }

        // ambil file foto

        $fileFoto = $this->request->getFile('sampul');

        if ($fileFoto->getError() == 4) {
            $namaFoto = 'default.png';
        } else {
            $namaFoto = $fileFoto->getRandomName();
            // pindah foto ke folder img
            $fileFoto->move('img', $namaFoto);
            // random filename

        }
        // echo $bukuModel->buat_kode('BK', 'id_buku', 'DESC', '1');
        // die;

        $bukuModel->save([
            'buku_id' => $bukuModel->buat_kode('BK', 'id_buku', 'DESC', '1'),
            'id_kategori' => $this->request->getVar('id_kategori'),
            'jml' => $this->request->getVar('jml'),
            'id_rak' => $this->request->getVar('id_rak'),
            'isbn' => $this->request->getVar('isbn'),
            'lampiran' => $this->request->getVar('lampiran'),
            'title' => $this->request->getVar('title'),
            'penerbit' => $this->request->getVar('penerbit'),
            'pengarang' => $this->request->getVar('pengarang'),
            'thn_buku' => $this->request->getVar('thn_buku'),
            'sampul' => $namaFoto,
        ]);
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');
        return redirect()->to('../petugas/databuku');
    }

    public function delBuku($buku)
    {
        $kategoriModel = new \App\Models\BukuModel();
        $kategoriModel->delbuku($buku);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('../petugas/databuku');
    }

    public function editBuku()
    {

        $fileFoto = $this->request->getFile('sampul');

        if ($fileFoto->getError() == 4) {
            $namaFoto = 'default.png';
        } else {
            $namaFoto = $fileFoto->getRandomName();
            // pindah foto ke folder img
            $fileFoto->move('img', $namaFoto);
            // random filename

        }
        $bukuModel = new \App\Models\BukuModel();
        $bukuModel->save([
            'id_buku' => $this->request->getVar('id_buku'),
            'buku_id' => $bukuModel->buat_kode('BK', 'id_buku', 'DESC', '1'),
            'id_kategori' => $this->request->getVar('id_kategori'),
            'jml' => $this->request->getVar('jml'),
            'id_rak' => $this->request->getVar('id_rak'),
            'isbn' => $this->request->getVar('isbn'),
            'lampiran' => $this->request->getVar('lampiran'),
            'title' => $this->request->getVar('title'),
            'penerbit' => $this->request->getVar('penerbit'),
            'pengarang' => $this->request->getVar('pengarang'),
            'thn_buku' => $this->request->getVar('thn_buku'),
            'sampul' => $namaFoto,
        ]);
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');
        return redirect()->to('../petugas/databuku');
    }

    public function peminjaman()
    {
        $pinjamModel = new \App\Models\PinjamModel();
        $data = [
            'title' => 'Peminjaman Buku | Edulab',
            'join' => $this->db->query("SELECT tbl_pinjam.anggota_id, tbl_login.nama,tbl_pinjam.status, tbl_pinjam.tgl_kembali, tbl_pinjam.tgl_pinjam, tbl_pinjam.pinjam_id
            FROM tbl_login
            INNER JOIN tbl_pinjam ON tbl_login.anggota_id=tbl_pinjam.anggota_id 
            WHERE tbl_pinjam.status='Dipinjam';")->getResultArray()
        ];

        return view('petugas/peminjaman', $data);
    }

    public function pengembalian()
    {
        $pinjamModel = new \App\Models\PinjamModel();
        $dikembalikan = 'Dikembalikan';
        $data = [
            'title' => 'Pengembalian Buku | Edulab',
            'pinjam' => $pinjamModel->getKembali(),
            'join' => $this->db->query("SELECT *
            FROM tbl_login
            INNER JOIN tbl_pinjam ON tbl_login.anggota_id=tbl_pinjam.anggota_id
            WHERE tbl_pinjam.status='Dikembalikan';")->getResultArray()
        ];

        return view('petugas/pengembalian', $data);
    }

    public function result()
    {
        // $user = $this->loginModel->get_tableid_edit('tbl_login', 'anggota_id', $this->input->post('kode_anggota'));
        $user = $this->loginModel->getLoginInfo();

        dd($user);
        die;
        error_reporting(0);
        if ($user->nama != null) {
            echo '<table class="table table-striped">
						<tr>
							<td>Nama Anggota</td>
							<td>:</td>
							<td>' . $user->nama . '</td>
						</tr>
						<tr>
							<td>Telepon</td>
							<td>:</td>
							<td>' . $user->telepon . '</td>
						</tr>
						<tr>
							<td>E-mail</td>
							<td>:</td>
							<td>' . $user->email . '</td>
						</tr>
						<tr>
							<td>Alamat</td>
							<td>:</td>
							<td>' . $user->alamat . '</td>
						</tr>
						<tr>
							<td>Level</td>
							<td>:</td>
							<td>' . $user->level . '</td>
						</tr>
					</table>';
        } else {
            echo 'Anggota Tidak Ditemukan !';
        }
    }
    public function prosespinjam()
    {
        $pinjamModel = new \App\Models\PinjamModel();
        $tglpinjam = date('d-m-Y', strtotime($this->request->getVar('tgl')));
        $tgl_kembali = date('d-m-Y', strtotime('+' . $this->request->getVar('lamapeminjaman') . ' days', strtotime($tglpinjam)));
        $pinjamModel->save([
            // 'id_pinjam' => $this->request->getVar('nopinjam'),
            'pinjam_id' => $this->request->getVar('nopinjam'),
            'anggota_id' => $this->request->getVar('anggota_id'),
            'buku_id' => $this->request->getVar('buku_id'),
            'status' => 'Dipinjam',
            'tgl_pinjam' => $tglpinjam,
            'lama_pinjam' => $this->request->getVar('lamapeminjaman'),
            'tgl_kembali' => $tgl_kembali,
            // 'tgl_balik' => $this->request->getVar('tgl_balik'),
        ]);
        session()->setFlashdata('pesan', 'Proses peminjaman berhasil.');
        return redirect()->to('../petugas/peminjaman');
    }

    public function delPinjam($pinjam)
    {
        $pinjamModel = new \App\Models\PinjamModel();
        $pinjamModel->delPinjam($pinjam);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('../petugas/peminjaman');

        // $status = $this->db->query("SELECT tbl_pinjam.status FROM tbl_pinjam WHERE pinjam_id='PJ1';")->getResultArray();
        // dd($status);
        // die;
    }
    public function detailPinjam($pinjam_id)
    {
        $pinjamModel = new \App\Models\PinjamModel();
        $pinjam = $pinjamModel->getPinjam($pinjam_id);

        $data = [
            'title' => 'Detail Pinjam Buku | Edulab',
            'peminjaman' => $pinjam
        ];
        return view('petugas/detailpinjam', $data);
    }
    public function kembalikan($pinjam_id)
    {
        $pinjamModel = new \App\Models\PinjamModel();
        $tglpinjam = date('d-m-Y', strtotime($this->request->getVar('tgl')));
        $tgl_kembali = date('d-m-Y', strtotime('+' . $this->request->getVar('lamapeminjaman') . ' days', strtotime($tglpinjam)));
        $pinjam = $pinjamModel->getPinjam($pinjam_id);

        $pinjamModel->save([
            'id_pinjam' => $pinjam['id_pinjam'],
            'pinjam_id' => $pinjam_id,
            'status' => 'Dikembalikan',
            'tgl_balik' => date('d-m-Y')
            // 'tgl_balik' => $this->request->getVar('tgl_balik'),
        ]);

        return redirect()->to('../petugas/peminjaman');
    }
}
