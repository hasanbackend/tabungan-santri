<?php

namespace App\Models;

use CodeIgniter\Model;

class m_penyetoran extends Model
{

    protected $table = 'view_penyetoran';

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
        return $this->db->table('tb_penyetoran')->insert($data);
    }

    // public function hapusdata($userId)
    // {
    //     return $this->db->table('tb_users')->delete(['userId' => $userId]);
    // }
    // public function ambildata($userId)
    // {
    //     return $this->db->table('tb_users')->getWhere(['userId' => $userId]);
    // }
    // public function editdata($data, $userId)
    // {
    //     return $this->db->table('tb_users')->update($data, ['userId' => $userId]);
    // }
}
