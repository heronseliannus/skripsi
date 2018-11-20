<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index()
    {
        return view('user', ['users' => User::all()]);
    }

    public function store(Request $request)
    {
        return $request->input('form-firstname');
        $photoName;
        if($request->hasFile('photo')) {
            $photoName = $request->photo->store('images');
        } else {
            $photoName = "";
        }

        $user = new User;

        $user->first_name = $request->input('first_name');
        $user->last_name = $request->last_name;
        $user->nik = $request->nik;
        $user->phone = $request->phone;
        $user->photo = $photoName;
        $user->role_id = 2;
        $user->password = $request->password;
        $user->address = $request->address;
        $user->kota = $request->kota;
        $user->provinsi = $request->provinsi;
        $user->tgl_lahir = $request->tgl_lahir;
        $user->email = $request->email;

        $user->save();

        $response = [
            'status' => true,
            'msg' => $user
        ];
        return response()->json($response);
    }
}
