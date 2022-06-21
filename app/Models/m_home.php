<?php

namespace App\Models;

use CodeIgniter\Model;

class m_home extends Model
{

    public function tot_nasabah()
    {
        return $this->db->table('tb_nasabah')->countAll();
    }
    public function tot_admin()
    {
        return $this->db->table('tb_admin')->countAll();
    }
    public function tot_tarik()
    {
        return $this->db->table('tb_penarikan')->countAll();
    }
    public function tot_setor()
    {
        return $this->db->table('tb_penyetoran')->countAll();
    }


    public function select_sum()
    {
        $builder = $this->db->table('tb_penyetoran');
        $builder->selectSum('jumlah');
        $query = $builder->get();
        return $query;
        return $this->db->table('tb_penyetoran')->selectSum('jumlah');
    }
}
