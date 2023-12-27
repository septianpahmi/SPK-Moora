<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function index(){
        $hotel = Hotel::all();
        return view('pages.hotel', compact('hotel'));
    }

    public function post(Request $request){
        $data = new Hotel();
        $data -> nama_hotel = $request -> nama_hotel;
        $data -> lokasi = $request -> lokasi;
        $data -> harga = $request -> harga;
        $image = $request -> image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request -> image -> move('Hotel', $imagename);
        $data -> image=$imagename;
        $data -> save();
        return redirect('/dashboard/hotel')->with('success','Galeri Berhasil di Upload!');
    }

    public function delete($id){
        $data = Hotel::find($id);
        $data -> delete();
        return redirect('/dashboard/hotel');
    }

    public function edit($id){
        $hotel = Hotel::find($id);
        return view('pages.edit-hotel', compact('hotel'));
    }

    public function update(Request $request, $id){
        $data = Hotel::find($id);
        $data -> nama_hotel = $request -> nama_hotel;
        $data -> lokasi = $request -> lokasi;
        $data -> harga = $request -> harga;
        $image = $request -> image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request -> image -> move('Hotel', $imagename);
        $data -> image=$imagename;
        $data -> save();
        return redirect('/dashboard/hotel');
    }
}
