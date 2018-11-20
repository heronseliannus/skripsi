<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class TestingController extends Controller
{

    public function store(Request $request)
    {
        if($request->input('firstname')) {
            return $request->firstname;
        } else {
            return "no Way";
        }
    }
       
}
