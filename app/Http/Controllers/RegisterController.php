<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\FlareClient\View;

class RegisterController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => ['required','email', 'unique:users,email'],
            'password' => ['reuired', 'min:8'],
            'password_confirmation' => ['required', 'min:8', 'confirmed']
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        if (Authth::attempt(['email' => $user->$email, 'password' => $password])) {
            $request->session()->regenerate();

            return redirect()->intended('home');
        }
    }
}
