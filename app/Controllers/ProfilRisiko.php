<?php

namespace App\Controllers;

use App\Models\profilRisikoModel;

class ProfilRisiko extends BaseController
{
    // Mendeklarasikan model
    protected $profilRisikoModel;
    
    public function __construct()
    {
        $this->profilRisikoModel = new ProfilRisikoModel(); // Inisialisasi model dengan nama variabel $profilRisikoModel
    }
    
    public function index(): string
    {   
        $data = $this->profilRisikoModel->getData();
        return view('layout/main', ['content' => view('profil_risiko/index', ['data' => $data])]);
    }

    public function add(): string
    {   
        $data = $this->profilRisikoModel->getData();
        return view('layout/main', ['content' => view('profil_risiko/add', ['data' => $data])]);
    }

    public function edit(): string
    {       
        $data = $this->profilRisikoModel->getData();
        return view('layout/main', ['content' => view('profil_risiko/edit', ['data' => $data])]);
    }

    public function data(): string
    {       
        $data = $this->profilRisikoModel->getData();
        return view('layout/main', ['content' => view('profil_risiko/data', ['data' => $data])]);
    }
}
