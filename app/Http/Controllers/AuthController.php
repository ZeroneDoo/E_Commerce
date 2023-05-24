<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostLoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function viewLogin()
    {
        return view('auth.login');
    }

    public function viewRegister()
    {
        return view('auth.register');
    }

    public function postLogin(PostLoginRequest $req)
    {
        if(Auth::attempt([
            'email' => $req->email,
            'password' => $req->password,
        ])){
            return Auth::user()->role == 'user' ? redirect()->route('home') : redirect()->route('view.home');
        }else{
            return redirect('/login')->with('msg_error', 'Email atau Password tidak valid');
        }
    }

    public function postLogout(){
        Auth::logout();

        return back();
    }

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver("google")->user();
            $findId = User::where("google_id", $user->getId())->first();

            if($findId)
            {
                Auth::login($findId);
            }else{
                $tambahData = User::create([
                    ""
                ]);
            }
        } catch(\Throwable $err){

        }
    }

}
