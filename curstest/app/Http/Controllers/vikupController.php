<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vikupModel;

class vikupController extends Controller
{
    public function vikupSubmit(Request $req)
    {
        $zayvka = new vikupModel;

        $zayvka->fio_client = $req->input('fio_client');
        $zayvka->number_client = $req->input('number_client');
        $zayvka->status_client = $req->input('status_client');

        $zayvka->save();

        return redirect()->route('/');
    }

    public function uslgSubmit(Request $req)
    {
        $zayvka = new vikupModel;

        $zayvka->fio_client = $req->input('fio_client');
        $zayvka->number_client = $req->input('number_client');
        $zayvka->status_client = $req->input('status_client');

        $zayvka->save();

        return redirect()->route('servis');
    }

    public function zayvkaSubmit(Request $req)
    {
        $zayvka = new vikupModel;

        $zayvka->fio_client = $req->input('fio_client');
        $zayvka->number_client = $req->input('number_client');
        $zayvka->status_client = $req->input('status_client');

        $zayvka->save();

        return redirect()->route('catalog');
    }

    public function dateClient()
    {
        return view('clients', ['clients' => vikupModel::all()]);
    }

    public function delClient($id)
    {
        vikupModel::find($id)->delete();
        return redirect()->route('clients');
    }
}
