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

    public function edit($id)
{
    $model = new MahasiswaModel();

    $data['mahasiswa'] = $model->find($id);

    return view('mahasiswa/edit', $data);
}


public function update($id)
{
    $aturan = [
        'nim' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'NIM wajib diisi.'
            ]
        ],

        'nama' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Nama wajib diisi.'
            ]
        ],

        'email' => [
            'rules' => 'required|valid_email',
            'errors' => [
                'required' => 'Email wajib diisi.',
                'valid_email' => 'Format email tidak valid.'
            ]
        ],

        'prodi' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Program studi wajib diisi.'
            ]
        ],

        'ipk' => [
            'rules' => 'required|numeric|greater_than_equal_to[0]|less_than_equal_to[4]',
            'errors' => [
                'required' => 'IPK wajib diisi.',
                'numeric' => 'IPK harus berupa angka.',
                'greater_than_equal_to' => 'IPK minimal 0.',
                'less_than_equal_to' => 'IPK maksimal 4.'
            ]
        ]
    ];

    if (!$this->validate($aturan)) {
        return redirect()->back()
            ->with('errors', $this->validator->getErrors());
    }

    $model = new MahasiswaModel();

    $data = [
        'nim'   => $this->request->getPost('nim'),
        'nama'  => $this->request->getPost('nama'),
        'email' => $this->request->getPost('email'),
        'prodi' => $this->request->getPost('prodi'),
        'ipk'   => $this->request->getPost('ipk')
    ];

    if ($model->update($id, $data)) {
        return redirect()->to('/mahasiswa')
            ->with('success', 'Data mahasiswa berhasil diubah!');
    } else {
        return redirect()->back()
            ->with('error', 'Data mahasiswa gagal diubah!');
    }
}

public function delete($id)
{
    $model = new MahasiswaModel();

    if ($model->delete($id)) {
        return redirect()->to('/mahasiswa')
            ->with('success', 'Data mahasiswa berhasil dihapus!');
    } else {
        return redirect()->to('/mahasiswa')
            ->with('error', 'Data mahasiswa gagal dihapus!');
    }
}


    public function store()
{
    $aturan = [
        'nim' => [
            'rules' => 'required|is_unique[mahasiswa.nim]',
            'errors' => [
                'required' => 'NIM wajib diisi.',
                'is_unique' => 'NIM sudah digunakan.'
            ]
        ],

        'nama' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Nama wajib diisi.'
            ]
        ],

        'email' => [
            'rules' => 'required|valid_email|is_unique[mahasiswa.email]',
            'errors' => [
                'required' => 'Email wajib diisi.',
                'valid_email' => 'Format email tidak valid.',
                'is_unique' => 'Email sudah digunakan.'
            ]
        ],

        'prodi' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Program studi wajib diisi.'
            ]
        ],

        'ipk' => [
            'rules' => 'required|numeric|greater_than_equal_to[0]|less_than_equal_to[4]',
            'errors' => [
                'required' => 'IPK wajib diisi.',
                'numeric' => 'IPK harus berupa angka.',
                'greater_than_equal_to' => 'IPK minimal 0.',
                'less_than_equal_to' => 'IPK maksimal 4.'
            ]
        ]
    ];

    if (!$this->validate($aturan)) {
        return redirect()->to('/mahasiswa/tambah')
            ->with('errors', $this->validator->getErrors());
    }

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
        return redirect()->to('/mahasiswa/tambah')
            ->with('error', 'Data mahasiswa gagal ditambahkan!');
    }
}
}
