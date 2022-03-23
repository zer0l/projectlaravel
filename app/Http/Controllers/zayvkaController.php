<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\zayvka;

class zayvkaController extends Controller
{
    public function zayvkaSubmit(Request $req)
    {
        $zayvka = new zayvka;

        $zayvka->nazvan = $req->input('nazvan');
        $zayvka->opis = $req->input('opis');
        $zayvka->categ = $req->input('categ');
        $zayvka->status = $req->input('status');
        $zayvka->photo = $req->file('photo')->store('uploads', 'public');


        $zayvka->save();


        return redirect()->route('zayvka');
    }

    public function zayvkaData()
    {
        return view('dashboard', ['zayvka' => zayvka::all()]);
    }

    public function zayvkaHome()
    {
        return view('welcome', ['zayvka' => zayvka::simplepaginate(4)]);
    }


    public function zayvkaDelete($id)
    {
        zayvka::find($id)->delete();
        return redirect()->route('dashboard');
    }
}
