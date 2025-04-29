<?php

namespace App\Models; // Namespace yang benar
use CodeIgniter\Model; // Menggunakan Model dari CodeIgniter

class PenilaianRisikoModel extends Model
{
    // Nama tabel yang digunakan oleh model ini
    protected $table = 'penilaian_risiko';  
    protected $primaryKey = 'id';    
      
    // Fungsi untuk mengambil data
    public function getData()
    {
        return $this->findAll();  
    }

    // Fungsi untuk menambah data
    public function addData($data)
    {
        return $this->save($data);  
    }

    // Fungsi untuk mengedit data berdasarkan ID
    public function editData($id, $data)
    {
        return $this->update($id, $data);  
    }

    // Fungsi untuk menghapus data berdasarkan ID
    public function deleteData($id)
    {
        return $this->delete($id);  
    }
}
