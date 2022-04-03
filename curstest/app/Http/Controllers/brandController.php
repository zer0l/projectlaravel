<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\avtoM;

class brandController extends Controller
{
    public function addCar(Request $req)
    {
        $zayvka = new Brand;

        $zayvka->addbrand = $req->input('addbrand');

        $zayvka->save();

        return redirect()->route('addBrand');
    }


    public function addModel(Request $req)
    {
        $zayvka = new avtoM;

        $zayvka->models = $req->input('addmodel');
        $zayvka->brand_id = $req->input('brands');

        $zayvka->save();

        return redirect()->route('addBrand');
    }

    public function dateBrand(Request $req)
    {
        $brand = Brand::all();
        $model = 0;  

        if (isset($req->brand_id)) {
        $check = $req->brand_id;
        $model = Brand::find($check)->avtoMs;
        }

        if($req -> ajax()){
           return view('ajax.models',
           ['model' => $model])->render();      
        }

        return view('addCar', ['brand' => $brand,'model' => $model]);
    }

    public function dbBrand()
    {
        return view('addBrand', ['brand' => Brand::all()]);
    }
}
