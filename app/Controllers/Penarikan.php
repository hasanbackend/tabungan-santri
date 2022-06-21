<?php

namespace App\Controllers;

use App\Models\m_penarikan;
use App\Models\m_nasabah;

class Penarikan extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->model = new m_penarikan();
        $this->nasabah = new m_nasabah();
    }
    public function index()
    {
        $data = [
            'penarikan' => $this->model->getAllData()
        ];
        echo view('templates/head', $data);
        echo view('templates/navbar', $data);
        echo view('templates/sidebar', $data);
        echo view('penarikan/index', $data);
        echo view('templates/footer');
    }
    public function tambah()
    {
        helper('form');
        $data = [
            'nasabah' => $this->nasabah->getAllData(),
        ];
        echo view('templates/head', $data);
        echo view('templates/navbar');
        echo view('templates/sidebar', $data);
        echo view('penarikan/tambah', $data);
        echo view('templates/footer');
    }

    public function simpan()
    {

        $data = [
            'tarikId' => $this->request->getVar('tarikId'),
            'nasabahId' => $this->request->getVar('nasabahId'),
            'jumlah' => $this->request->getVar('jumlah'),
            'timestamp' => $this->request->getVar('timestamp'),
        ];
        // var_dump($data);
        // die;

        $simpan =  $this->model->simpan($data);
        if ($simpan) {
            return redirect()->to('/nasabah');
        }
    }
}
