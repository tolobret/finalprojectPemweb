<?php

namespace App\Models;

use CodeIgniter\Model;

class PinjamModel extends Model
{
    protected $table = 'tbl_pinjam';
    protected $primaryKey = 'id_pinjam';
    protected $allowedFields = ['pinjam_id', 'anggota_id', 'buku_id', 'status', 'tgl_pinjam', 'lama_pinjam', 'tgl_balik', 'tgl_kembali'];


    public function getPinjam($pinjam = false)
    {
        if ($pinjam == false) {
            return $this->db->query("SELECT * FROM tbl_pinjam WHERE status='Dipinjam';")->getResultArray();
        }

        return $this->where(['pinjam_id' => $pinjam])->first();
    }
    public function getKembali($pinjam = false)
    {
        // $db      = \Config\Database::connect();
        // $builder = $db->table('tbl_pinjam');
        // $builder->where('status', 'Dikembalikan');
        return $this->db->query("SELECT * FROM tbl_pinjam WHERE status='Dikembalikan';")->getResultArray();
    }
    public function delPinjam($pinjam)
    {
        $this->where(['pinjam_id' => $pinjam])->delete();
    }
    public function countPinjam($buku_id = false)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tbl_pinjam');
        $builder->where('status', 'Dipinjam');
        if ($buku_id == false) {

            $count = $builder->countAllResults();
            return $count;
        } else {

            $builder->where('buku_id', $buku_id);
            $count = $builder->countAllResults();
            return $count;
        }
    }

    public function countKembali()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tbl_pinjam');
        $builder->where('status', 'Dikembalikan');
        $count = $builder->countAllResults();
        return $count;
    }

    public function buat_kode($kodeawal, $idkode, $orderby, $limit)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tbl_pinjam');
        $builder->orderBy($idkode, $orderby);
        $builder->limit($limit);
        $query = $builder->get()->getResultArray();
        // return dd($query);
        if ($query['0']['id_pinjam'] > 0) {
            //jika kode ternyata sudah ada.
            $hasil = $kodeawal . ($query['0']['id_pinjam'] + 1);
        } else {
            $hasil = $kodeawal . $query['0']['id_pinjam'];
        }
        return $hasil;
    }
}
