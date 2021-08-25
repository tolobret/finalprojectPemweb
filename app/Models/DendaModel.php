<?php

namespace App\Models;

use CodeIgniter\Model;

class DendaModel extends Model
{
    protected $table = 'tbl_denda';
    protected $primaryKey = 'id_denda';
    protected $allowedFields = ['id_denda', 'pinjam_id', 'denda', 'lama_waktu', 'tgl_denda'];

    public function getDenda()
    {
        return $this->findAll();
    }
    public function delDenda($id_denda)
    {
        $this->where(['id_denda' => $id_denda])->delete();
    }
}
