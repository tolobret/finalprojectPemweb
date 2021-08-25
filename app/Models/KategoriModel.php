<?php

namespace App\Models;

use CodeIgniter\Model;

class KategoriModel extends Model
{
    protected $table = 'tbl_kategori';
    protected $primaryKey = 'id_kategori';
    protected $allowedFields = ['id_kategori', 'nama_kategori'];

    public function getKategori()
    {
        return $this->findAll();
    }
    public function delKategori($kategori)
    {
        $this->where(['nama_kategori' => $kategori])->delete();
    }
    public function countAnggota()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tbl_kategori');
        $count = $builder->countAllResults();
        return $count;
    }

    public function editKategori($id, $kategori)
    {

        $db      = \Config\Database::connect();
        $builder = $db->table('tbl_kategori');
        $builder->where(['id_kategori', $id]);
        $data = [
            'nama_kategori' => $kategori,
            'id_kategori' => $id
        ];
        $builder->replace($data);
        // $this->where(['id_kategori' => $id])->set('nama_kategori', $kategori);
    }
}
