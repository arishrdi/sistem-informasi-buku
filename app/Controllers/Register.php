<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PengunjungModel;

class Register extends BaseController
{
    public function __construct()
    {
        helper(['form']);
    }
    public function index()
    {
        $data = [];
        return view('register', $data);
    }
    public function registerPengunjung()
    {

        $pengunjung_model = new PengunjungModel();

        $rules = [
            'nama' => ['rules' => 'required|min_length[5]'],
            'email' => ['rules' => 'required|valid_email|is_unique[pengunjung.email]'],
            'password' => ['rules' => 'required|min_length[8]'],
            'confirm_password'  => ['rules' => 'matches[password]']
        ];

        if ($this->validate($rules)) {
            $data = [
                'nama' => $this->request->getVar('nama'),
                'email' => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];
            $pengunjung_model->save($data);
            return redirect()->to('/login');
        } else {
            $data['validation'] = $this->validator;
            return view('register', $data);
        }
    }
}
