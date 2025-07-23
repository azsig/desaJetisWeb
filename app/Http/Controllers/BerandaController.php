<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        $beritaController = new BeritaController();
        $beritas = $beritaController->beritaTerbaru();

        return view('beranda', [
            'beritas' => $beritas
        ]);
    }
}
