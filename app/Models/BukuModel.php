<?php

namespace App\Models;

use CodeIgniter\Database\Query;
use CodeIgniter\Model;

class BukuModel extends Model
{
    protected $table = 'tbl_buku';
    protected $primaryKey = 'id_buku';
    protected $allowedFields = ['buku_id', 'id_kategori', 'jml', 'id_rak', 'isbn', 'title', 'penerbit', 'pengarang', 'thn_buku', 'sampul', 'jml_dipinjam'];


    public function getBuku($buku = false)
    {
        if ($buku == false) {
            return $this->findAll();
        }
        return $this->where(['id_buku' => $buku])->first();
    }

    public function delbuku($buku)
    {

        $this->where(['title' => $buku])->delete();
    }

    public function countBuku()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tbl_buku');
        $count = $builder->countAllResults();
        return $count;
    }

    public function editbuku($id, $buku)
    {

        $db      = \Config\Database::connect();
        $builder = $db->table('tbl_buku');
        $builder->where(['id_buku', $id]);
        $data = [
            'nama_buku' => $buku,
            'id_buku' => $id
        ];
        $builder->replace($data);
    }

    public function buat_kode($kodeawal, $idkode, $orderby, $limit)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tbl_buku');
        $builder->orderBy($idkode, $orderby);
        $builder->limit($limit);
        $query = $builder->get()->getResultArray();
        // return dd($query);
        if ($query['0']['id_buku'] > 0) {
            //jika kode ternyata sudah ada.
            $hasil = $kodeawal . ($query['0']['id_buku'] + 1);
        } else {
            $hasil = $kodeawal . $query['0']['id_buku'];
        }
        return $hasil;
    }
}
