@include('partials.header')
@include('partials.navbar')
@include('partials.sidebar')
<main id="main" class="main">

    <div class="pagetitle">
      <h1> Data Penilaian</h1>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                <h5 class="card-title">Daftar Data Penilaian</h5>
                
                <!-- Table with stripped rows -->
                <table class="table datatable">
                    <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Nama Hotel</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($hotel as $item)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$item->nama_hotel}}</td>
                          <td>
                              @php
                                  // Periksa apakah ada entri penilaian untuk hotel ini
                                  $penilaianExists = \App\Models\Penilaian::where('id_hotel', $item->id)->exists();
                              @endphp

                              @if ($penilaianExists)
                                  <!-- Jika ada entri penilaian, tombol "Tambah" disembunyikan -->
                                  <a href="{{ url('/penilaian/edit', $item->id) }}" type="button" class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="bi bi-pencil-square"></i></a>
                              @else
                                  <!-- Jika tidak ada entri penilaian, tampilkan tombol "Tambah" -->
                                  <a href="{{ url('/penilaian/tambah', $item->id) }}" id="btnTambah" type="button" class="btn btn-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Tambah"><i class="bi bi-plus"></i></a>
                              @endif
                          </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                <!-- End Table with stripped rows -->

                </div>
            </div>

            </div>
      </div>
    </section>

  </main><!-- End #main -->
@include('partials.footer')