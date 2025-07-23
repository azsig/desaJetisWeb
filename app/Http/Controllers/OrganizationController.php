<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Organization;

class OrganizationController extends Controller
{
    public function index()
    {
        $pemerintahan = Organization::where('kelompok', 'pemerintahan')
                        ->orderBy('id')
                        ->get();

        $bpd = Organization::where('kelompok', 'bpd')
                ->orderBy('id')
                ->get();

        return view('struktur-organisasi', compact('pemerintahan', 'bpd'));
    }
}
