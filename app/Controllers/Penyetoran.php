<?php

namespace App\Controllers;

use App\Models\m_penyetoran;
use App\Models\m_nasabah;

class penyetoran extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->model = new m_penyetoran();
        $this->nasabah = new m_nasabah();
    }
    public function index()
    {
        $data = [
            'penyetoran' => $this->model->getAllData()
        ];
        echo view('templates/head', $data);
        echo view('templates/navbar', $data);
        echo view('templates/sidebar', $data);
        echo view('penyetoran/index', $data);
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
        echo view('penyetoran/tambah', $data);
        echo view('templates/footer');
    }

    public function simpan()
    {

        $data = [
            'setorId' => $this->request->getVar('setorId'),
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

    // public function hapus()
    // {
    //     $uri = service('uri');
    //     $userId = $uri->getSegment('3');

    //     $hapusdata =  $this->model->hapusdata($userId);
    //     return redirect()->to('/User');
    // }
    // public function edit()
    // {
    //     helper('form');
    //     $uri = service('uri');
    //     $userId = $uri->getSegment('3');
    //     $ambildata = $this->model->ambildata($userId);


    //     if (count($ambildata->getResult()) > 0) {
    //         $row = $ambildata->getRow();
    //         $data = [
    //             'roles' => $this->roles->getAllData(),

    //             'userId' => $userId,
    //             'nama' => $row->nama,
    //             'email' => $row->email,
    //             'password' => $row->password,
    //             'rolesId' => $row->rolesId,
    //             'alamat' => $row->alamat,
    //         ];


    //         echo view('templates/head', $data);
    //         echo view('templates/navbar');
    //         echo view('templates/sidebar', $data);
    //         echo view('User/edit', $data);
    //         echo view('templates/footer');
    //     }
    // }
    // public function update()
    // {
    //     $userId = $this->request->getPost('userId');
    //     $data = [

    //         'nama' => $this->request->getPost('nama'),
    //         'email' => $this->request->getPost('email'),
    //         'password' => $this->request->getPost('password'),
    //         'rolesId' => $this->request->getPost('rolesId'),
    //         'alamat' => $this->request->getPost('alamat'),

    //     ];
    //     // var_dump($data);
    //     // die;

    //     $update =  $this->model->edit($data, $userId);
    //     if ($update) {
    //         return redirect()->to('/User');
    //     }
    // }
}
