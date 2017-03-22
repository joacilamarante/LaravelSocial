<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Socialite;
use Auth;


class SocialAuthController extends Controller
{
    public function entrarGithub(){
        return Socialite::driver('github')->redirect();
    }

    public function retornoGithub(){

        $userSocial = Socialite::driver('github')->user();
        $email = $userSocial->getEmail();

        if(Auth::check()){
            $user = Auth::user();
            $user->github = $email;
            $user->save();
            return redirect()->intended('/home');
        }

        //
        $user = User::where('github',$email)->first();
        if(isset($user->name)){
            Auth::login($user);
            return redirect()->intended('/home');
        }

        if(User::where('email',$email)->count()){
            $user =User::where('email',$email)->first();
            $user->github = $email;
            $user->save();
            Auth::login($user);
            return redirect()->intended('/home');
        }

        $user = new User;
        $user->name  = $userSocial-getName();
        $user->email = $userSocial->getEmail();
        $user->github = $userSocial->getEmail();
        $user->password = bcrypt($userSocial->token);
        $user->save();
        Auth::login($user);
        return redirect()->intended('/home');

    }

    public function entrarFacebook(){
        return Socialite::driver('facebook')->redirect();
    }

    public function retornoFacebook(){

        $userSocial = Socialite::driver('facebook')->user();
        $email = $userSocial->getEmail();

        if(Auth::check()){
            $user = Auth::user();
            $user->facebook = $email;
            $user->save();
            return redirect()->intended('/home');
        }

        //
        $user = User::where('facebook',$email)->first();
        if(isset($user->name)){
            Auth::login($user);
            return redirect()->intended('/home');
        }

        if(User::where('email',$email)->count()){
            $user =User::where('email',$email)->first();
            $user->facebook = $email;
            $user->save();
            Auth::login($user);
            return redirect()->intended('/home');
        }

        $user = new User;
        $user->name  = $userSocial-getName();
        $user->email = $userSocial->getEmail();
        $user->facebook = $userSocial->getEmail();
        $user->password = bcrypt($userSocial->token);
        $user->save();
        Auth::login($user);
        return redirect()->intended('/home');

        
    }
}

