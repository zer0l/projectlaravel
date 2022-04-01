<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\carModels;

class carController extends Controller
{
    public function carSubmit(Request $req)
    {
        $zayvka = new carModels;

        $zayvka->brand = $req->input('brand');
        $zayvka->model = $req->input('model');
        $zayvka->year = $req->input('year');
        $zayvka->probeg = $req->input('probeg');
        $zayvka->xoz = $req->input('xoz');
        $zayvka->opis = $req->input('opis');
        $zayvka->price = $req->input('price');


        $zayvka->save();


        return redirect()->route('addCar');
    }

    public function welcomePaginate()
    {
        return view('welcome', ['car' => carModels::simplepaginate(3)]);
    }
}
