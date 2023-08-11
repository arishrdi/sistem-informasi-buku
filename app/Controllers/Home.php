<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $role = session()->get('role');
        if ($role == 'admin') {
            return view('admin');
        } elseif ($role == 'pengunjung') {
            return view('pengunjung');
        }
        return view('welcome');
    }
    public function dashboard() {
        return view('dashboard');
    }
}
