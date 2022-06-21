<?php

namespace App\Controllers;

use App\Models\m_nasabah;


class nasabah extends BaseController
{
    protected $encrypter;

    public function __construct()
    {
        helper('form');
        $this->model = new m_nasabah();
    }
    public function index()
    {
        $data = [
            'nasabah' => $this->model->getAllData()
        ];
        echo view('templates/head', $data);
        echo view('templates/navbar', $data);
        echo view('templates/sidebar', $data);
        echo view('nasabah/index', $data);
        echo view('templates/footer');
    }
    public function tambah()
    {
        helper('form');

        echo view('templates/head');
        echo view('templates/navbar');
        echo view('templates/sidebar');
        echo view('nasabah/tambah');
        echo view('templates/footer');
    }
    public function simpan()
    {
        $data = [
            'nasabahId' => $this->request->getVar('nasabahId'),
            'nama' => $this->request->getVar('nama'),
            'NIS' => $this->request->getVar("NIS"),
            'alamat' => $this->request->getVar("alamat"),
            'saldo' => $this->request->getVar("saldo")
        ];
        // var_dump($data);
        // die;

        $simpan =  $this->model->simpan($data);
        if ($simpan) {
            return redirect()->to('/Nasabah');
        }
    }

    public function hapus()
    {
        $uri = service('uri');
        $nasabahId = $uri->getSegment('3');

        $hapusdata =  $this->model->hapusdata($nasabahId);
        return redirect()->to('/Nasabah');
    }
    public function edit()
    {
        helper('form');
        $uri = service('uri');
        $nasabahId = $uri->getSegment('3');
        $ambildata = $this->model->ambildata($nasabahId);


        if (count($ambildata->getResult()) > 0) {
            $row = $ambildata->getRow();

            $data = [
                'nasabahId' => $nasabahId,
                'NIS' => $row->NIS,
                'nama' => $row->nama,
                'alamat' => $row->alamat,
                'saldo' => $row->saldo,

            ];

            echo view('templates/head', $data);
            echo view('templates/navbar');
            echo view('templates/sidebar', $data);
            echo view('nasabah/edit', $data);
            echo view('templates/footer');
        }
    }
    public function update()
    {
        $nasabahId = $this->request->getPost('nasabahId');
        $data = [

            'nama' => $this->request->getPost('nama'),
            'NIS' => $this->request->getPost('NIS'),
            // 'alamat' => $this->request->getPost('alamat'),
            'alamat' => $this->request->getPost('alamat'),
            'saldo' => $this->request->getPost('saldo'),

        ];
        // var_dump($data);
        // die;

        $update =  $this->model->edit($data, $nasabahId);
        if ($update) {
            return redirect()->to('/nasabah');
        }
    }
}
