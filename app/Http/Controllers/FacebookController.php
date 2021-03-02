<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class FacebookController extends Controller
{
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleFacebookCallback()
    {
        
        //dd(Socialite::driver('facebook')->fields(['first_name', 'last_name', 'email', 'picture'])->user());
        try {
        
            $user = Socialite::driver('facebook')->user();
         
            $findUser = User::where('facebook_id', $user->id)->first();

            if($findUser){
                Auth::login($findUser);
                return redirect()->intended('/');
         
            }
            else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'mobile' => '123456789',
                    'address' => 'xxxxx, Kannur, Kerala',
                    'facebook_id'=> $user->id,
                    'password' => encrypt('123456dummy'),
                ]);
                
                Auth::login($newUser);
                //Auth::attempt(['email' => $user->email, 'password' => encrypt('123456dummy')]);
        
                return redirect()->intended('/');
            }
        
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
