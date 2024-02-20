<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeminjamController extends Controller
{
    public function index() {
        return view('layouts2.dashboardPeminjam');
    }
}
