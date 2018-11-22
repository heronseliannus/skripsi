<?php

namespace App\Http\Controllers\Kelolanilai;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

use App\User;

class KelolanilaiController extends Controller
{
    public function index()
    {
        return view('kelolanilai', ['kelolanilai' => Kelolanilai::all()]);
    }

    public function store(Request $request)
    {

        $Nilai = new Nilai;

        $Nilai->first_name = $request['form-firstname'];
        $Nilai->last_name = $request['form-lastname'];
        $Nilai->nilai1 = $request['form-nilai1'];
        $Nilai->nilai2 = $request['form-nilai2'];
        $Nilai->nilai3 = $request['form-nilai3'];
        $Nilai->nilai4 = $request['form-nilai4'];

        $Nilai->save();

        return view('testing', compact('request'));

    }
}
