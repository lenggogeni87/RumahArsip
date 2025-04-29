<?php

namespace App\Controllers;

use App\Models\PenilaianRisikoModel;

class PenilaianRisiko extends BaseController
{
    // Mendeklarasikan model
    protected $penilaianRisikoModel;
    
    public function __construct()
    {
        $this->penilaianRisikoModel = new PenilaianRisikoModel(); // Inisialisasi model dengan nama variabel $PenilaianRisikoModel
    }
    
    public function index_satker(): string
    {   
        $data = $this->penilaianRisikoModel->getData();
        #print_r($data);
        return view('layout/main', ['content' => view('penilaian_risiko/index_satker', ['data' => $data])]);
    }

    public function add_satker(): string
    {   
        $data = $this->penilaianRisikoModel->getData();
        return view('layout/main', ['content' => view('penilaian_risiko/add', ['data' => $data])]);
    }

    public function edit_satker(): string
    {       
        $data = $this->penilaianRisikoModel->getData();
        return view('layout/main', ['content' => view('penilaian_risiko/edit', ['data' => $data])]);
    }
}
