<?php

namespace App\Models;

use CodeIgniter\Model;

class m_admin extends Model
{
    protected $table = 'view_admin';
    protected $allowedFields = ['nama', 'NIS',  'password', 'nomorTelp', 'alamat'];
    public function get_data($nis, $pass)
    {
        $data = $this->db->table('tb_admin')->where(['NIS' => $nis, 'password' => $pass])->get()->getRowArray();
        if ($data) {
            return $data;
        } else {
            return 0;
        }
    }
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
        return $this->db->table('tb_admin')->insert($data);
    }
    public function hapusdata($adminId)
    {
        return $this->db->table('tb_admin')->delete(['adminId' => $adminId]);
    }
    public function ambildata($adminId)
    {
        return $this->db->table('tb_admin')->getWhere(['adminId' => $adminId]);
    }
    public function edit($data, $adminId)
    {
        return $this->db->table('tb_admin')->update($data, ['adminId' => $adminId]);
    }
    public function preview($adminId)
    {
        return $this->db->table('view_admin')->getWhere(['adminId' => $adminId]);
    }
}
