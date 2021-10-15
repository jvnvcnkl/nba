<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\RegisterRequest;

use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    // public function construct(){
    //     $this->middleware('')
    // }
    public function getRegisterForm()
    {
        return view('auth.register');
    }

    public function getLoginForm()
    {
        return view('auth.login');
    }

    public function register(RegisterRequest $request)
    {
        $data = $request->validated();
        $data['password'] = Hash::make($data['password']);
        $newUser = User::create($data);

        auth()->login($newUser);

        return redirect('/');
    }

    public function login(Request $request)
    {
        $credentials = [
            'email' => $request->get('email'),
            'password' => $request->get('password')
        ];
        info($credentials);

        if (auth()->attempt($credentials)) {

            return redirect('/');
        }

        return view('auth.login', ['invalid_credentials' => true]);
    }

    public function logout()
    {
        auth()->logout();

        return redirect('/login');
    }
}
