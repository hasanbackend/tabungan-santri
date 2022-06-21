<?php

namespace App\Controllers;

use App\Models\m_admin;
use App\Models\m_role;

class admin extends BaseController
{

    public function __construct()
    {
        helper('form');
        $this->model = new m_admin();
        $this->role = new m_role();
    }
    public function index()
    {
        $data = [
            'admin' => $this->model->getAllData()
        ];
        echo view('templates/head', $data);
        echo view('templates/navbar', $data);
        echo view('templates/sidebar', $data);
        echo view('admin/index', $data);
        echo view('templates/footer');
    }
    public function tambah()
    {
        helper('form');
        $data = [
            'role' => $this->role->getAllData(),
        ];
        echo view('templates/head', $data);
        echo view('templates/navbar',);
        echo view('templates/sidebar');
        echo view('admin/tambah', $data);
        echo view('templates/footer');
    }
    public function simpan()
    {
        $password = $this->request->getVar("password");
        $nama = $this->request->getVar('nama');
        $plaintext = $password;
        $key = '1234567890';
        $method = 'aes-256-cbc';
        $iv = chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0);
        $encrypted = base64_encode(openssl_encrypt($plaintext, $method, $key, OPENSSL_RAW_DATA, $iv));
        $decrypted = openssl_decrypt(base64_decode($encrypted), $method, $key, OPENSSL_RAW_DATA, $iv);

        // $plaintext2 = $nama;
        // $key2 = '0987654321';
        // $method2 = 'aes-256-cbc';
        // $iv2 = chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0);
        // $encrypted2 = base64_encode(openssl_encrypt($plaintext2, $method2, $key2, OPENSSL_RAW_DATA, $iv2));
        // $decrypted2 = openssl_decrypt(base64_decode($encrypted2), $method2, $key2, OPENSSL_RAW_DATA, $iv2);
        $data = [
            'adminId' => $this->request->getVar('adminId'),
            // 'nama' => $encrypted2,
            'nama' => $this->request->getVar('nama'),
            'password' => $encrypted,
            'NIS' => $this->request->getVar('NIS'),
            'roleId' => $this->request->getVar('roleId'),
            'nomorTelp' => $this->request->getVar('nomorTelp'),
            'alamat' => $this->request->getVar('alamat'),
        ];
        // var_dump($data);
        // die;
        $simpan =  $this->model->simpan($data);
        if ($simpan) {
            return redirect()->to('/Admin');
        }
    }

    public function hapus()
    {
        $uri = service('uri');
        $adminId = $uri->getSegment('3');

        $hapusdata =  $this->model->hapusdata($adminId);
        return redirect()->to('/Admin');
    }
    public function edit()
    {


        helper('form');
        $uri = service('uri');
        $adminId = $uri->getSegment('3');
        $ambildata = $this->model->ambildata($adminId);

        if (count($ambildata->getResult()) > 0) {
            $row = $ambildata->getRow();

            $password = $row->password;
            $plaintext = $password;
            $key = '1234567890';
            $method = 'aes-256-cbc';
            $iv = chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0);
            // $encrypted = base64_encode(openssl_encrypt($plaintext, $method, $key, OPENSSL_RAW_DATA, $iv));
            $decrypted = openssl_decrypt(base64_decode($plaintext), $method, $key, OPENSSL_RAW_DATA, $iv);

            $data = [
                'role' => $this->role->getAllData(),
                'adminId' => $adminId,
                'nama' => $row->nama,
                'NIS' => $row->NIS,
                'password' => $decrypted,
                'nomorTelp' => $row->nomorTelp,
                'alamat' => $row->alamat,
            ];
            // var_dump($data);
            // die;

            echo view('templates/head', $data);
            echo view('templates/navbar');
            echo view('templates/sidebar');
            echo view('admin/edit', $data);
            echo view('templates/footer');
        }
    }
    public function update()
    {

        $adminId = $this->request->getPost('adminId');
        $password = $this->request->getPost('password');
        $plaintext = $password;
        $key = '1234567890';
        $method = 'aes-256-cbc';
        $iv = chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0);
        $encrypted = base64_encode(openssl_encrypt($plaintext, $method, $key, OPENSSL_RAW_DATA, $iv));
        $decrypted = openssl_decrypt(base64_decode($plaintext), $method, $key, OPENSSL_RAW_DATA, $iv);

        $data = [

            'nama' => $this->request->getPost('nama'),
            'roleId' => $this->request->getPost('roleId'),
            'password' => $encrypted,
            'NIS' => $this->request->getPost('NIS'),
            'nomorTelp' => $this->request->getPost('nomorTelp'),
            'alamat' => $this->request->getPost('alamat'),

        ];
        // var_dump($data);
        // die;

        $update =  $this->model->edit($data, $adminId);
        if ($update) {
            return redirect()->to('/admin');
        }
    }
    public function preview()
    {
        helper('form');
        $uri = service('uri');
        $adminId = $uri->getSegment('3');
        $preview = $this->model->preview($adminId);

        if (count($preview->getResult()) > 0) {
            $row = $preview->getRow();
            $password = $row->password;
            $plaintext = $password;
            $key = '1234567890';
            $method = 'aes-256-cbc';
            $iv = chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0);
            // $encrypted = base64_encode(openssl_encrypt($plaintext, $method, $key, OPENSSL_RAW_DATA, $iv));
            $decrypted = openssl_decrypt(base64_decode($plaintext), $method, $key, OPENSSL_RAW_DATA, $iv);

            $data['row'] = [
                'adminId' => $adminId,
                'nama' => $row->nama,
                'NIS' => $row->NIS,
                'name' => $row->name,
                'password' => $decrypted,
                'nomorTelp' => $row->nomorTelp,
                'alamat' => $row->alamat,
            ];

            echo view('templates/head', $data);
            echo view('templates/navbar');
            echo view('templates/sidebar');
            echo view('admin/preview', $data);
            echo view('templates/footer');
        }
    }
}
