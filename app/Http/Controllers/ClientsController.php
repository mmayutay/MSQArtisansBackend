<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClientUsers;
use Illuminate\Support\Facades\Hash;

class ClientsController extends Controller
{
    public function signup(Request $request)
    {
        $createNewAccount = new ClientUsers();
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

    public function ClientUserData($id)
    {
        return ClientUsers::where('id', $id)->get()[0];
    }
}
