<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\brandModel;

class brandController extends Controller
{
    public function addCar(Request $req)
    {
        $zayvka = new brandModel;

        $zayvka->addbrand = $req->input('addbrand');

        $zayvka->save();

        return redirect()->route('addBrand');
    }

    public function dateBrand()
    {
        return view('addCar', ['brand' => brandModel::all()]);
    }
}
