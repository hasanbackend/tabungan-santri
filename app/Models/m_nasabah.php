<?php

namespace App\Models;

use CodeIgniter\Model;

class m_nasabah extends Model
{
    protected $table = 'tb_nasabah';
    protected $allowedFields = ['nama', 'alamat', 'password'];

    public function __construct()
    {
        $this->db = db_connect();
        $this->builder = $this->builder();
    }
    public function getAllData()
    {
        return $this->builder()->get()->getResultArray();
    }
    public function tambah()
    {
        return $this->builder()->get()->getResultArray();
    }
    public function simpan($data)
    {
        return $this->db->table('tb_nasabah')->insert($data);
    }
    public function hapusdata($nasabahId)
    {
        return $this->db->table('tb_nasabah')->delete(['nasabahId' => $nasabahId]);
    }
    public function ambildata($nasabahId)
    {
        return $this->db->table('tb_nasabah')->getWhere(['nasabahId' => $nasabahId]);
    }
    public function edit($data, $nasabahId)
    {
        return $this->db->table('tb_nasabah')->update($data, ['nasabahId' => $nasabahId]);
    }
}
