<?php

namespace App\Controllers;

use App\Models\m_home;

class Home extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->model = new m_home();
        $this->session = \Config\Services::session();
    }
    public function index()
    {
        $data = [
            'judul' => 'Selamat Datang Di Aplikasi Tabungan Santri',
            'tot_nasabah' => $this->model->tot_nasabah(),
            'tot_admin' => $this->model->tot_admin(),
            'tot_tarik' => $this->model->tot_tarik(),
            'tot_setor' => $this->model->tot_setor(),
        ];
        // var_dump($data);
        // die;
        echo view('templates/head', $data);
        echo view('templates/navbar');
        echo view('templates/sidebar');
        echo view('home/index', $data);
        echo view('templates/footer');
    }
    public function logout()
    {
        $this->session->destroy();
        return redirect()->to('/');
    }
}
