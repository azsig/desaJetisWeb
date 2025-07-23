<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pddrw;
use App\Models\Pddpekerjaan;
use App\Models\Pddusia;
use App\Models\Pddpendidikan;

class DemografiController extends Controller
{
    public function index()
    {
        $dataRw = Pddrw::all();
        $dataPekerjaan = Pddpekerjaan::orderBy('jumlah', 'desc')->get();
        $dataUsia = PddUsia::orderBy('umur', 'asc')->get();
        $dataPendidikan = PddPendidikan::orderBy('jumlah', 'desc')->get();

        return view('kondisidemografi', [
            'dataRw' => $dataRw,
            'dataPekerjaan' => $dataPekerjaan,
            'dataUsia' => $dataUsia,
            'dataPendidikan' => $dataPendidikan
        ]);
    }
}
