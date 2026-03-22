<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class RegisterController extends Controller
{
    public function create(): View
    {
        //dd(session('errors', null));


        return view('auth.register');
    }

    //----------------------------------------
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:25'],
            'email' => ['required', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'min:5', 'confirmed'],


        ]);
        //dd($request->all());

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            //'password' => $request->password,не было закешированы пароли для БД
        ]);

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
