<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    public  function  discordLogin ()
    {
        return  Socialite::driver('discord')->redirect();
    }

 
    public  function  discordLoginCallback ()
    {
        $user = Socialite::driver( 'discord' )->user();

        dd($user);
    }
}
