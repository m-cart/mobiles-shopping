<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Hash; 

class UserController extends Controller
{
    public function login(Request $req)
    {
        $user =  User::where(['email'=>$req->email])->first();
        if($req->email == 'admin@gmail.com' && $req->password == 'admin')
        {
            return redirect('/admin');
        }
        else if(!$user || !Hash::check($req->password,$user->password))
        {
            return '<script>
                        alert("Incorrect email and password!!"); 
                        window.location.href="/login";
                    </script>';
        }
        else
        {
            $req->session()->put('user',$user);
            return redirect('/');
        }
    }

    public function signup(Request $req)
    {
        //return $req->input();
        $user = new User;
        $user->name = $req->name;
        $user->mobile = $req->mobile_number;
        $user->email = $req->email;
        $user->address = $req->address;
        $user->password = Hash::make($req->password);                   // Hash is used to encrypt password. To decrypt password, '$req->password;'
        $user->save();
        return '<script>
                    alert("Registration successfully completed!! Please login to your account"); 
                    window.location.href="/login";
                </script>';
    }
}
