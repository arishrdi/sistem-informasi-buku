<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BukuModel;

class Buku extends BaseController
{
    public function index()
    {
        $model = new BukuModel();
        $data['buku'] = $model->findAll();
        return view('buku/index', $data);
    }
    public function tambahBuku() {
        return view('buku/tambah-buku');
    }
    public function simpanBuku() {
        $model = new BukuModel();

        $data = [
            'judul' => $this->request->getVar('judul'),
            'pengarang' => $this->request->getVar('pengarang'), 
            'tahun' => $this->request->getVar('tahun'),
        ];

        $model->save($data);

        return redirect('admin/buku');
    }
}
