<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Kriteria;
use App\Models\Penilaian;
use App\Models\Subkriteria;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PenilaianController extends Controller
{
    public function index(){
        $hotel = Hotel::all();
        $data = Penilaian::all();
        return view('pages.penilaian', compact('hotel','data'));
    }

    public function tambah($id){
        $data = Hotel::find($id);
        $kriteria = Kriteria::all();
        $idKriteria = $kriteria->first()->id; 
        $sub = Subkriteria::where('id_kriteria', $idKriteria)->get();
        return view('pages.tambah-penilaian', compact('data', 'kriteria','sub'));
    }

    public function post(Request $request, $id){
        $penilaian = new Penilaian();
        $penilaian->id_hotel = $id;
        $penilaian->id_kriteria = $id;
        $penilaian -> c1 = $request->input('c1');
        $penilaian -> c2 = $request->input('c2');
        $penilaian -> c3 = $request->input('c3');
        $penilaian -> c4 = $request->input('c4');
        $penilaian -> c5 = $request->input('c5');
        $penilaian -> c6 = $request->input('c6');
        $penilaian -> c7 = $request->input('c7');
        $penilaian->save();
        return redirect('/dashboard/penilaian')->with('success', 'Penilaian berhasil ditambahkan');
    }

    public function MatriksKeputusan()
    {
        $data = Penilaian::all();
        $bobotArray = Kriteria::pluck('bobot')->toArray();
        $jumlahKolom = 7; // Sesuaikan dengan jumlah kolom yang ada (C1-C7)
        $totalKolom = array_fill(0, $jumlahKolom, 0);
        

        foreach ($data as $item) {
            for ($i = 0; $i < $jumlahKolom; $i++) {
                $totalKolom[$i] += $item->{'c' . ($i + 1)};
            }
        }
        return view('pages.matriks-keputusan', compact('data', 'jumlahKolom', 'totalKolom', 'bobotArray'));
    }

    public function tampilkanPengurutan()
    {
        $data = Penilaian::all();
        $bobotArray = Kriteria::pluck('bobot')->toArray();
        $jumlahKolom = 7; // Sesuaikan dengan jumlah kolom yang ada (C1-C7)

        // Menyimpan nilai Yi untuk pengurutan
        $sortedYi = [];

        foreach ($data as $item) {
            $totalYi = 0;
            $totalKolom = array_fill(0, $jumlahKolom, 0); // Inisialisasi total kolom di setiap iterasi

            for ($i = 0; $i < $jumlahKolom; $i++) {
                $bobot = $bobotArray[$i];

                // Periksa apakah total kolom tidak nol sebelum melakukan pembagian
                if ($totalKolom[$i] != 0) {
                    $nilaiTernormalisir = ($item->{'c' . ($i + 1)}) / $totalKolom[$i];
                    $nilaiNormalisasiTerbobot = $nilaiTernormalisir * $bobot;
                    $totalYi += $nilaiNormalisasiTerbobot;

                    // Perbarui total kolom
                    $totalKolom[$i] += $item->{'c' . ($i + 1)};
                } 
            }

            // Menyimpan nilai Yi dan nama hotel untuk pengurutan
            $sortedYi[] = [
                'hotel' => $item->Idhotel->nama_hotel,
                'totalYi' => $totalYi,
            ];
        }

        // Mengurutkan array secara langsung dalam loop
        usort($sortedYi, function ($a, $b) {
            return $b['totalYi'] <=> $a['totalYi'];
        });

        // Menampilkan view dengan membawa variabel $sortedYi
        return view('pages.hasil-akhir', compact('sortedYi'));
    }

}
