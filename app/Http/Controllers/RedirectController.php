<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedirectController extends Controller
{
    public function cek() {
        // dd(Auth()->user());
        if(Auth()->user()->role_id === 1){
            return redirect('dashboard');
        }
        else if (Auth()->user()->role_id === 2){
            return redirect('dashboard');
        } else {
            return redirect();
        }
    }
}
