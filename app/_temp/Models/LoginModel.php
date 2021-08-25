<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    protected $table = 'tbl_login';
    protected $primaryKey = 'id_login';
    protected $allowedFields = ['anggota_id', 'nama', 'telepon', 'tempat_lahir', 'email', 'tgl_lahir', 'user', 'alamat', 'pass', 'level', 'jenkel', 'foto'];


    public function getLoginInfo($user = false)
    {
        if ($user == false) {
            return $this->findAll();
        }

        return $this->where(['user' => $user])->first();
    }
    public function delLoginInfo($user)
    {
        $this->where(['user' => $user])->delete();
    }
    public function countAnggota()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tbl_login');
        $count = $builder->countAllResults();
        return $count;
    }

    public function buat_kode($kodeawal, $idkode, $orderby, $limit)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tbl_login');
        $builder->orderBy($idkode, $orderby);
        $builder->limit($limit);
        $query = $builder->get()->getResultArray();
        // return dd($query);
        if ($query['0']['id_login'] > 0) {
            //jika kode ternyata sudah ada.
            $hasil = $kodeawal . ($query['0']['id_login'] + 1);
        } else {
            $hasil = $kodeawal . $query['0']['id_login'];
        }
        return $hasil;


        // echo $builder->countAllResults();
    }
}
