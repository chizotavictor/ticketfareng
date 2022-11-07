<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;
use Auth;
use Exception;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class GoogleLogin extends Controller
{
    use AuthenticatesUsers;

    public function __construct() {
      $this->middleware('guest')->except('logout');
    }

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
            $finduser = User::where('google_id', $user->id)->first();
            if($finduser){
                Auth::login($finduser);
                return redirect('/home');
            }else{
                $rand_password = Hash::make(rand(1000000, 9999999) . '_' . time());
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'email_verified_at' => Carbon::now(),
                    'google_id'=> $user->id,
                    'password' => $rand_password
                ]);
                Auth::login($newUser);
                return redirect()->back();
            }
        } catch (Exception $e) {
            return redirect('auth/google');
        }

    }
}
