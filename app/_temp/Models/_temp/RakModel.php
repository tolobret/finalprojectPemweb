<?php

namespace App\Models;

use CodeIgniter\Model;

class RakModel extends Model
{
    protected $table = 'tbl_rak';
    protected $primaryKey = 'id_rak';
    protected $allowedFields = ['id_rak', 'nama_rak'];

    public function getRak()
    {

        return $this->findAll();
    }
    public function delrak($rak)
    {
        $this->where(['nama_rak' => $rak])->delete();
    }
    public function countRak()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tbl_rak');
        $count = $builder->countAllResults();
        return $count;
    }

    public function editRak($id, $rak)
    {

        $db      = \Config\Database::connect();
        $builder = $db->table('tbl_rak');
        $builder->where(['id_rak', $id]);
        $data = [
            'nama_rak' => $rak,
            'id_rak' => $id
        ];
        $builder->replace($data);
        // $this->where(['id_rak' => $id])->set('nama_rak', $rak);
    }
}
