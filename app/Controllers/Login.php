<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdminModel;
use App\Models\PengunjungModel;

class Login extends BaseController
{
    public function index()
    {
        return view('login');
    }
    public function login()
    {
        $session = session();
        $model_admin = new AdminModel();
        $model_pengunjung = new PengunjungModel();

        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $role = $this->request->getVar('role');

        if ($role == 'admin') {
            $user = $model_admin->where('email', $email)->first();

            if (is_null($user)) {
                return redirect()->back()->withInput()->with('error', 'Email tidak ditemukan');
            }

            $verify_password = password_verify($password, $user['password']);

            if (!$verify_password) {
                return redirect()->back()->withInput()->with('error', 'Password salah');
            }

            if ($user && $verify_password) {
                $session_data = [
                    'id' => $user['id_admin'],
                    'email' => $user['email'],
                    'isLoggedIn' => TRUE,
                    'role' => 'admin'
                ];
                $session->set($session_data);
            }
        } else {
            $user = $model_pengunjung->where('email', $email)->first();

            if (is_null($user)) {
                return redirect()->back()->withInput()->with('error', 'Email tidak ditemukan');
            }

            $verify_password = password_verify($password, $user['password']);

            if (!$verify_password) {
                return redirect()->back()->withInput()->with('error', 'Password salah');
            }

            if ($user && $verify_password) {
                $session_data = [
                    'id' => $user['id_pengunjung'],
                    'nama' => $user['nama'],
                    'email' => $user['email'],
                    'isLoggedIn' => TRUE,
                    'role' => 'pengunjung'
                ];
                $session->set($session_data);
            }
        }


        return redirect()->to('/');
    }
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}
