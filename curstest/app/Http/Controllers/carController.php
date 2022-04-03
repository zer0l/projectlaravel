<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\car;
use App\Models\Brand;

class carController extends Controller
{
    public function carSubmit(Request $req)
    {
        $zayvka = new car;

        $zayvka->brand_id = $req->input('brand');
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
        $carPagin = car::simplepaginate(3);
        return view('welcome', ['car' => $carPagin]);
    }

    public function catalogDate()
    {
        return view('catalog', ['car' => car::all()]);
    }

    public function delcatalogDate()
    {
        return view('deleteCar', ['car' => car::Paginate(6)]);
        
    }
    public function delcatalogDelete($id)
    {
        car::find($id)->delete();
        return redirect()->route('deleteCar');
    }
}
