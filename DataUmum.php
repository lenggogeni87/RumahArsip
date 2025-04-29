<?php

namespace App\Controllers;

use App\Models\DataUmumModel;

class DataUmum extends BaseController
{
    // Mendeklarasikan model
    protected $DataUmumModel;
    
    public function __construct()
    {
        $this->dataUmumModel = new DataUmumModel(); // Inisialisasi model dengan nama variabel $DataUmumModel
    }
    
    public function index()
    {
        // Gunakan $this->dataUmumModel
        $existingData = $this->dataUmumModel->first();

        if ($existingData) {
            session()->setFlashdata('info', 'Data sudah ada, tidak dapat ditambahkan.');
        }

        $data = $this->dataUmumModel->getData();
        return view('layout/main', ['content' => view('data_umum/index', ['data' => $data])]);
    }
    
    public function add()
    {   
        // Cek apakah tabel sudah memiliki data
        $existingData = $this->dataUmumModel->first();

        if ($existingData) {
            // Jika data sudah ada, redirect ke halaman lain dengan pesan
            return redirect()->to('/table-data-umum')->with('info', 'Data sudah ada, tidak dapat menambahkan data baru.');
        }

        $dataUmumModel = new \App\Models\DataUmumModel();
        $data = $this->dataUmumModel->getData();
        return view('layout/main', ['content' => view('data_umum/add', ['data' => $data])]);
    }
    
    public function store()
    {
        $dataUmumModel = new \App\Models\DataUmumModel();
        // Cek data baris pertama di database
        $existingData = $dataUmumModel->first();

        if ($existingData) {
            session()->setFlashdata('info', 'Data sudah ada, tidak dapat ditambahkan.');
        } else {
            
            // Validasi input
            if ($this->validate([
                'nama_unit_utama' => 'required',
                'nama_satuan_kerja' => 'required',
                'ketua' => 'required',
                'sekretaris' => 'required',
                'anggota' => 'required',
            ])) {
                
                $data = [
                    'Nama_Unit_Utama' => $this->request->getPost('nama_unit_utama'),
                    'Nama_Satuan_Kerja' => $this->request->getPost('nama_satuan_kerja'),
                    'Ketua' => $this->request->getPost('ketua'),
                    'Sekretaris' => $this->request->getPost('sekretaris'),
                    'Anggota' => $this->request->getPost('anggota'),
                ];

                // Handle file upload
                $file = $this->request->getFile('sk_tim');
                if ($file && $file->isValid()) {
                    $file->move(WRITEPATH . 'uploads');
                    $fileName = $file->getName();
                } else {
                    $fileName = null; // Jika tidak ada file yang diupload
                }

                // Tambahkan file jika ada
                if ($fileName) {
                    $data['SK_Tim_Unit_Pemilik_Risiko'] = $fileName;
                }

                $this->dataUmumModel->insert($data);
                return redirect()->to('/table-data-umum')->with('success', 'Data berhasil diperbarui.');

            } else {
                print_r($this->validator->getErrors());
            }
        }
        
    }

    public function edit($id=1): string
    {
        $data = $this->dataUmumModel->find($id);
        #print_r($data);

        return view('layout/main', ['content' => view('data_umum/edit', ['data' => $data])]);
    }

    public function update($id)
    {
        // Validasi input
        if ($this->validate([
            'nama_unit_utama' => 'required',
            'nama_satuan_kerja' => 'required',
            'ketua' => 'required',
            'sekretaris' => 'required',
            'anggota' => 'required',
        ])) {

            // Menyesuaikan nama kunci dengan data dari form
            $data = [
                'Nama_Unit_Utama' => $this->request->getPost('nama_unit_utama'),
                'Nama_Satuan_Kerja' => $this->request->getPost('nama_satuan_kerja'),
                'Ketua' => $this->request->getPost('ketua'),
                'Sekretaris' => $this->request->getPost('sekretaris'),
                'Anggota' => $this->request->getPost('anggota'),
            ];

            // Handle file upload
            $file = $this->request->getFile('sk_tim');
            if ($file && $file->isValid()) {
                $file->move(WRITEPATH . 'uploads');
                $fileName = $file->getName();
            } else {
                $fileName = null; // Jika tidak ada file yang diupload
            }

            // Tambahkan file jika ada
            if ($fileName) {
                $data['SK_Tim_Unit_Pemilik_Risiko'] = $fileName;
            }

            $this->dataUmumModel->update($id, $data);
            return redirect()->to('/table-data-umum')->with('success', 'Data berhasil diperbarui.');

        } else {
            print_r($this->validator->getErrors());
        }
    }

}
