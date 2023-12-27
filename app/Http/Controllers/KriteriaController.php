<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use Illuminate\Http\Request;

class KriteriaController extends Controller
{
    public function index(){
        $kriteria = Kriteria::all();
        return view('pages.kriteria', compact('kriteria'));
    }

    public function post(Request $request){
        $data = new Kriteria();
        $data -> kode = $request -> kode;
        $data -> nama = $request -> nama;
        $data -> bobot = $request -> bobot;
        $data -> save();
        return redirect('/kriteria');
    }

    public function delete($id){
        $data = Kriteria::find($id);
        $data -> delete();
        return redirect('/kriteria');
    }

    public function edit($id){
        $kriteria = Kriteria::find($id);
        return view('pages.edit-kriteria', compact('kriteria'));
    }

    public function update(Request $request, $id){
        $data = Kriteria::find($id);
        $data -> kode = $request -> kode;
        $data -> nama = $request -> nama;
        $data -> bobot = $request -> bobot;
        $data -> save();
        return redirect('/kriteria');
    }
}
