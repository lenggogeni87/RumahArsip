<?php

namespace App\Controllers;

use App\Models\ManajemenPenggunaModel;

class ManajemenPengguna extends BaseController
{
    // Mendeklarasikan model
    protected $ManajemenPenggunaModel;
    
    public function __construct()
    {
        $this->manajemenPenggunaModel = new ManajemenPenggunaModel(); // Inisialisasi model dengan nama variabel $ManajemenPenggunaModel
    }
    
    public function index(): string
    {   
        $data = $this->manajemenPenggunaModel->getData();
        return view('layout/main', ['content' => view('manajemen_pengguna/index', ['data' => $data])]);
    }

    public function add(): string
    {   
        $data = $this->manajemenPenggunaModel->getData();
        return view('layout/main', ['content' => view('manajemen_pengguna/add', ['data' => $data])]);
    }

    public function edit($id): string
    {
        $data = $this->manajemenPenggunaModel->find($id);

        if (!$data) {
            return 'Data tidak ditemukan';
        }
        return view('layout/main', ['content' => view('manajemen_pengguna/edit', ['data' => $data])]);
    }

    public function update($id)
    {
        // Validasi input
        if ($this->validate([
            'NamaPengguna' => 'required',
            'Username' => 'required',
            'NamaUnitUtama' => 'required',
            'NamaSatuanKerja' => 'required',
        ])) {

            // Menyesuaikan nama kunci dengan data dari form
            $data = [
                'NamaPengguna' => $this->request->getPost('NamaPengguna'),
                'Username' => $this->request->getPost('Username'),
                'NamaUnitUtama' => $this->request->getPost('NamaUnitUtama'),
                'NamaSatuanKerja' => $this->request->getPost('NamaSatuanKerja'),
            ];

            $this->manajemenPenggunaModel->update($id, $data);
            return redirect()->to('/table-manajemen-pengguna')->with('success', 'Data berhasil diperbarui.');

        } else {
            print_r($this->validator->getErrors());
        }
    }
}
