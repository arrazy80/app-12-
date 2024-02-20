<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Spatie\FlareClient\View;

class RegisterControllerOld extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:6',
            // 'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            // 'password_confirmation' => 'min:6'
        ]) ;

        if ($validated){
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            // if (Auth::attempt(['email' => $user->email, 'password' => $request->password])) {
                return redirect()->intended('/login');
            // }
        }


    }
    public function create() {
        return view('auth.register');
    }
}

// $validated = $request->validate([
//     'title' => 'required|unique:posts|max:255',
//     'body' => 'required',
// ]);
