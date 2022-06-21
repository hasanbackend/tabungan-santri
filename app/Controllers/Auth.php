<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\m_admin;

class Auth extends Controller
{
    public function index()
    {
        if (session('adminId')) {
            return redirect()->to(site_url('Home'));
        }
        helper(['form']);
        echo view('Auth/index');
    }

    public function auth()
    {
        $session = session();
        $model = new m_admin();
        $NIS = $this->request->getVar('nis');
        $password = $this->request->getVar('password');
        $plaintext = $password;
        $key = '1234567890';
        $method = 'aes-256-cbc';
        echo $password;
        $password = substr(hash('sha256', $key, true), 0, 32);
        $iv = chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0);
        $encrypted = base64_encode(openssl_encrypt($plaintext, $method, $key, OPENSSL_RAW_DATA, $iv));
        $data = $model->get_data($NIS, $encrypted);
        if ($data != 0) {

            $ses_data = [
                'adminId'       => $data['adminId'],
                'nama'     => $data['nama'],
                'NIS'    => $data['NIS'],
                'logged_in'     => TRUE
            ];
            $session->set($ses_data);
            return redirect()->to('/Home');
        } else {
            $session->setFlashdata('msg', 'NIS atau Password Salah');
            return redirect()->to('auth');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to(site_url('/auth'));
    }
}
