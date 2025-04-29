<?php

namespace App\Controllers;

use App\Models\FaktorRisikoModel;

class FaktorRisiko extends BaseController
{
    // Mendeklarasikan model
    protected $faktorRisikoModel;
    
    public function __construct()
    {
        $this->faktorRisikoModel = new FaktorRisikoModel(); // Inisialisasi model dengan nama variabel $FaktorRisikoModel
    }
    
    public function index(): string
    {   
        $data = $this->faktorRisikoModel->getData();
        return view('layout/main', ['content' => view('faktor_risiko/index', ['data' => $data])]);
    }

    public function add(): string
    {   
        $data = $this->faktorRisikoModel->getData();
        return view('layout/main', ['content' => view('faktor_risiko/add', ['data' => $data])]);
    }

    public function edit(): string
    {       
        $data = $this->faktorRisikoModel->getData();
        return view('layout/main', ['content' => view('faktor_risiko/edit', ['data' => $data])]);
    }
}
