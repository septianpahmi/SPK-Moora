<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use App\Models\Subkriteria;
use Illuminate\Http\Request;

class SubkriteriaController extends Controller
{
    public function index(){
        $data = Kriteria::all();
        $idKriteria = $data->first()->id; 
        $sub = Subkriteria::where('id_kriteria', $idKriteria)->get();
        return view('pages.sub-kriteria', compact('data','sub'));
    }
    public function tambah($id){
        $data = Kriteria::find($id);
        return view('pages.tambah-sub-kriteria', compact('data'));
    }
    public function post(Request $request, $id){
        $sub = new Subkriteria();
        $sub -> id_kriteria = $id;
        $sub -> sub_kriteria = $request -> sub_kriteria;
        $sub -> nilai = $request ->nilai;
        $sub -> save();
        return redirect('/dashboard/sub-kriteria');
    }
    public function update(Request $request, $id){
        $sub =  Subkriteria::find($id);
        $sub -> sub_kriteria = $request -> sub_kriteria;
        $sub -> nilai = $request ->nilai;
        $sub -> save();
        return redirect('/dashboard/sub-kriteria');
    }

    public function delete($id){
        $data = Subkriteria::find($id);
        $data->delete();
        return redirect('/dashboard/sub-kriteria');
    }

    public function edit($id){
        $data = Subkriteria::find($id);
        return view('pages.edit-subkriteria', compact('data'));
    }
}
