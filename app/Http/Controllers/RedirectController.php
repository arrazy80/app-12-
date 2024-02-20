<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedirectController extends Controller
{
    public function cek() {
        // dd(Auth()->user());
        if(Auth()->user()->role_id === 1){
            return redirect()->intended('/admin');
        }
        else if (Auth()->user()->role_id === 2){
            return redirect()->intended('/petugas');
        } else {
            return redirect()->intended('/peminjam');
        }
    }
}
