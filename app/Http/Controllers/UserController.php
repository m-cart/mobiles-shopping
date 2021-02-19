<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
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

    public function loginView()
    {
        return view('login');
    }

    public function login(Request $req)
    {
        $this->validate($req, [
            'email' => 'required|email|max:255',
            'password' => 'required',
        ]);
        if (Auth::attempt(['email'=>'admin@gmail.com', 'password'=>$req->password]))
        {
            return redirect('/admin');
        }
        else if (Auth::attempt($req->only('email', 'password')))
        {
            return redirect('/');
        }
        else
        {
            return '<script>
                        alert("Incorrect email or password!!"); 
                        window.location.href="/login";
                    </script>';
        }

        // $user =  User::where(['email'=>$req->email])->first();
        // if($req->email == 'admin@gmail.com' && Hash::check($req->password,$user->password))
        // {
        //     $req->session()->put('admin',$user);
        //     return redirect('/admin');
        // }
        // else if(!$user || !Hash::check($req->password,$user->password))
        // {
        //     return '<script>
        //                 alert("Incorrect email or password!!"); 
        //                 window.location.href="/login";
        //             </script>';
        // }
    }

    // public function logout()
    // {
    //     Auth::logout();
    //     return redirect('/login');
    // }
}
