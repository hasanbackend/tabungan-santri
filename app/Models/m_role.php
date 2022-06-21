<?php

namespace App\Models;

use CodeIgniter\Model;

class m_role extends Model
{
    protected $table = 'tb_role';

    public function __construct()
    {
        $this->db = db_connect();
        $this->builder = $this->builder();
    }
    public function getAllData()
    {
        return $this->builder()->get()->getResultArray();
    }
    public function simpan($data)
    {
        return $this->builder()->insert($data);
    }
    public function hapusdata($roleId)
    {
        return $this->builder()->delete(['roleId' => $roleId]);
    }
}
