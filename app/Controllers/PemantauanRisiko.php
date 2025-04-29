<?php

namespace App\Controllers;

use App\Models\PemantauanRisikoModel;

class PemantauanRisiko extends BaseController
{
    // Mendeklarasikan model
    protected $pemantauanRisikoModel;
    
    public function __construct()
    {
        $this->pemantauanRisikoModel = new PemantauanRisikoModel(); // Inisialisasi model dengan nama variabel $pemantauanRisikoModel
    }
    
    public function index(): string
    {   
        $data = $this->pemantauanRisikoModel->getData();
        return view('layout/main', ['content' => view('pemantauan_risiko/index', ['data' => $data])]);
    }

    public function add(): string
    {   
        $data = $this->pemantauanRisikoModel->getData();
        return view('layout/main', ['content' => view('pemantauan_risiko/add', ['data' => $data])]);
    }

    public function edit(): string
    {       
        $data = $this->pemantauanRisikoModel->getData();
        return view('layout/main', ['content' => view('pemantauan_risiko/edit', ['data' => $data])]);
    }

    public function data(): string
    {       
        $data = $this->pemantauanRisikoModel->getData();
        return view('layout/main', ['content' => view('pemantauan_risiko/data', ['data' => $data])]);
    }
}
