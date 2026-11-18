<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MahasiswaModel;

class MahasiswaController extends BaseController
{
    public function index()
    {
        $model = new MahasiswaModel();

        $data['mahasiswa'] = $model->findAll();

        return view('mahasiswa/index', $data);
    }

    public function create()
    {
        return view('mahasiswa/create');
    }

    public function store()
{
    $model = new MahasiswaModel();

    $data = [
        'nim'   => $this->request->getPost('nim'),
        'nama'  => $this->request->getPost('nama'),
        'email' => $this->request->getPost('email'),
        'prodi' => $this->request->getPost('prodi'),
        'ipk'   => $this->request->getPost('ipk'),
    ];

    if ($model->insert($data)) {
        return redirect()->to('/mahasiswa')
            ->with('success', 'Data mahasiswa berhasil ditambahkan ke database!');
    } else {
        return redirect()->back()
            ->withInput()
            ->with('error', 'Data mahasiswa gagal ditambahkan!');
    }
}
}
