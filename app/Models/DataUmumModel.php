<?php

namespace App\Models; // Namespace yang benar
use CodeIgniter\Model; // Menggunakan Model dari CodeIgniter

class DataUmumModel extends Model
{
    // Nama tabel yang digunakan oleh model ini
    protected $table = 'data_umum';  
    protected $primaryKey = 'ID_Data_Umum';

    protected $allowedFields = [
        'Nama_Unit_Utama',
        'Nama_Satuan_Kerja',
        'Ketua',
        'Sekretaris',
        'Anggota',
        'SK_Tim_Unit_Pemilik_Risiko',
    ];
      
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
    
    public function update($id = null, $row = null): bool
    {
        if ($id !== null && is_array($row)) {
            return $this->db->table($this->table)->update($row, [$this->primaryKey => $id]);
        }
        return false; // Kembalikan false jika parameter tidak sesuai
    }

    // Fungsi untuk menghapus data berdasarkan ID
    public function deleteData($id)
    {
        return $this->delete($id);  
    }


}
