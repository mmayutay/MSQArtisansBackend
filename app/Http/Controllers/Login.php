<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtisanUsers;
use Illuminate\Support\Facades\Hash;

class Login extends Controller
{
    public function login(Request $request)
    {
        $user = $request->input('username');
        $pass = $request->input('password');
        $userRequest = ArtisanUsers::where('username', $user)->get();
        if (count($userRequest) == 0) {
            return $userRequest;
        } else {
            $password = Hash::check($pass, $userRequest[0]->password);
            if ($password) {
                return $userRequest;
            }
            return false;
        }
        return $request;
    }



    public function signup(Request $request)
    {
        $createNewAccount = new ArtisanUsers();
        $createNewAccount->firstname = $request->firstname;
        $createNewAccount->lastname = $request->lastname;
        $createNewAccount->middlename = $request->middlename;
        $createNewAccount->address = $request->address;
        $createNewAccount->birthdate = $request->birthdate;
        $createNewAccount->phonenumber = $request->phonenumber;
        $createNewAccount->email = $request->email;
        $createNewAccount->username = $request->username;
        $createNewAccount->password = Hash::make($request->password);
        $createNewAccount->save();
        return $createNewAccount;
    }
}
