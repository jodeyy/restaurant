<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller

{
    public function index() {
    $jumlah_meja = DB::select("SELECT mejas.nomor_meja, COUNT(*) as jumlah FROM reservasis
    JOIN mejas ON reservasis.meja_id = mejas.id
    GROUP BY mejas.nomor_meja");

    return view('dashboard')->with('jumlah_meja', $jumlah_meja);
    }
}
