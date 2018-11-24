<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

use App\User;

class UserController extends Controller
{
    public function index()
    {
    return view('user.user', ['users' => User::all()]);
    }

    public function store(Request $request)
    {

        $photoName;
        if($request['photo']) {
            $photoName = $request['photo']->store('images');
        } else {
            $photoName = "";
        }

        $user = new User;

        $user->first_name = $request['form-firstname'];
        $user->last_name = $request['form-lastname'];
        $user->nik = $request['form-nik'];
        $user->phone = $request['form-phone-number'];
        $user->photo = $photoName;
        $user->role_id = 2;
        $user->password = $request['form-password'];
        $user->address = $request['form-address'];
        $user->city = $request['select-city'];
        $user->state = $request['select-state'];
        $user->birth_date = Carbon::parse($request['select-date'] . '-' . $request['select-month'] . '-' . $request['form-date-year']) ;
        $user->email = $request['form-user-email'];

        $user->save();

        return view('testing', compact('request'));

    }
}
