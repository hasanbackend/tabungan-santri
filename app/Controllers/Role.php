<?php

namespace App\Controllers;

use App\Models\m_role;

class Role extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->model = new m_role();
    }
    public function index()
    {
        $data = [
            'role' => $this->model->getAllData()
        ];
        echo view('templates/head', $data);
        echo view('templates/navbar', $data);
        echo view('templates/sidebar', $data);
        echo view('role/index', $data);
        echo view('templates/footer');
    }
    public function tambah()
    {
        helper('form');

        echo view('templates/head');
        echo view('templates/navbar');
        echo view('templates/sidebar');
        echo view('role/tambah');
        echo view('templates/footer');
    }
    public function simpan()
    {

        $data = [
            'roleId' => $this->request->getVar('roleId'),
            'name' => $this->request->getVar('name'),
        ];
        //   var_dump($data);
        // die;

        $simpan =  $this->model->simpan($data);
        if ($simpan) {
            return redirect()->to('/Role');
        }
    }
    public function hapus()
    {
        $uri = service('uri');
        $roleId = $uri->getSegment('3');

        $hapusdata =  $this->model->hapusdata($roleId);
        return redirect()->to('/Role');
    }
}
