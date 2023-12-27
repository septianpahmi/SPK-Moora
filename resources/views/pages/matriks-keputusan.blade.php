@include('partials.header')
@include('partials.navbar')
@include('partials.sidebar')
<main id="main" class="main">

    <div class="pagetitle">
      <h1> Data Sub Kriteria</h1>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
                
            <div class="card">
                <div class="card-body">
                <h5 class="card-title">Matriks Keputusan (X)</h5>
                <!-- Table with stripped rows -->
                <table class="table datatable">
                    <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Nama Hotel</th>
                        <th scope="col">C1</th>
                        <th scope="col">C2</th>
                        <th scope="col">C3</th>
                        <th scope="col">C4</th>
                        <th scope="col">C5</th>
                        <th scope="col">C6</th>
                        <th scope="col">C7</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($data as $item)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{ $item->Idhotel->nama_hotel }}</td>
                        <td>{{ $item->c1 }}</td>
                        <td>{{ $item->c2 }}</td>
                        <td>{{ $item->c3 }}</td>
                        <td>{{ $item->c4 }}</td>
                        <td>{{ $item->c5 }}</td>
                        <td>{{ $item->c6 }}</td>
                        <td>{{ $item->c7 }}</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                
                <!-- End Table with stripped rows -->

                </div>
            </div>
            <div class="card">
                <div class="card-body">
                <h5 class="card-title">Matriks Ternormalisai (R)</h5>
   
                <table class="table datatable">
                    <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Nama Hotel</th>
                        <th scope="col">C1</th>
                        <th scope="col">C2</th>
                        <th scope="col">C3</th>
                        <th scope="col">C4</th>
                        <th scope="col">C5</th>
                        <th scope="col">C6</th>
                        <th scope="col">C7</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($data as $item)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{ $item->Idhotel->nama_hotel }}</td>
                        @for ($i = 0; $i < $jumlahKolom; $i++)
                            @php
                                $nilaiTernormalisir = ($item->{'c' . ($i + 1)}) / $totalKolom[$i];
                            @endphp
                            <td>{{ number_format($nilaiTernormalisir, 4) }}</td>
                        @endfor
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                
                <!-- End Table with stripped rows -->

                </div>
            </div>
            <div class="card">
                <div class="card-body">
                <h5 class="card-title">Matriks Normalisasi Terbobot</h5>
   
                <table class="table datatable">
                    <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Nama Hotel</th>
                        <th scope="col">C1</th>
                        <th scope="col">C2</th>
                        <th scope="col">C3</th>
                        <th scope="col">C4</th>
                        <th scope="col">C5</th>
                        <th scope="col">C6</th>
                        <th scope="col">C7</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($data as $item)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{ $item->Idhotel->nama_hotel }}</td>
                        @for ($i = 0; $i < $jumlahKolom; $i++)
                        @php
                            // Ambil bobot dari model atau variabel sesuai dengan kebutuhan
                            $bobot = $bobotArray[$i]; // Ganti dengan sumber bobot yang sesuai
                            $nilaiTernormalisir = ($item->{'c' . ($i + 1)}) / $totalKolom[$i];
                            $nilaiNormalisasiTerbobot = $nilaiTernormalisir * $bobot;
                        @endphp
                            <td>{{ number_format($nilaiNormalisasiTerbobot, 4) }}</td>
                        @endfor
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                
                <!-- End Table with stripped rows -->

                </div>
            </div>
            <div class="card">
                <div class="card-body">
                <h5 class="card-title">Menghitung Nilai Yi</h5>
   
                <table class="table datatable">
                    <thead>
                    <tr>
                        <th scope="col">Nama Hotel</th>
                        <th scope="col">Nilai Yi</th> <!-- Kolom untuk nilai Yi -->
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($data as $item)
                    <tr>
                        <td>{{ $item->Idhotel->nama_hotel }}</td>
                        @php
                            $totalYi = 0;
                        @endphp
                        @for ($i = 0; $i < $jumlahKolom; $i++)
                            @php
                                $bobot = $bobotArray[$i];
                                $nilaiTernormalisir = ($item->{'c' . ($i + 1)}) / $totalKolom[$i];
                                $nilaiNormalisasiTerbobot = $nilaiTernormalisir * $bobot;
                                $totalYi += $nilaiNormalisasiTerbobot;
                                
                            @endphp 
                        @endfor
                        <td>{{ number_format($totalYi, 4) }}</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>

                </div>
            </div>

            </div>
      </div>
    </section>

  </main><!-- End #main -->
@include('partials.footer')