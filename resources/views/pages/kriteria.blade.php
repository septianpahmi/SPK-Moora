@include('partials.header')
@include('partials.navbar')
@include('partials.sidebar')
<main id="main" class="main">

    <div class="pagetitle">
      <h1> Data Kriteria</h1>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Tambah Data kriteria</h5>
    
                  <!-- Floating Labels Form -->
                  <form action="{{url('/kriteria/post')}}" method="POST" class="row g-3">
                    @csrf
                    <div class="col-md-3">
                      <div class="form-floating">
                        <input type="text" class="form-control" name="kode" id="kode" placeholder="Kode Kriteria">
                        <label for="kode">Kode Kriteria</label>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-floating">
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Kriteria">
                        <label for="nama">Nama Kriteria</label>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-floating">
                        <input type="text" class="form-control" name="bobot" id="bobot" placeholder="Bobot">
                        <label for="bobot">Bobot</label>
                      </div>
                    </div>
                    
                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Submit</button>
                      <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                  </form><!-- End floating Labels Form -->
    
                </div>
              </div>

            <div class="card">
                <div class="card-body">
                <h5 class="card-title">Daftar Data Kriteria</h5>
                
                <!-- Table with stripped rows -->
                <table class="table datatable">
                    <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Kode Kriteria</th>
                        <th scope="col">Nama Kriteria</th>
                        <th scope="col">Bobot</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($kriteria as $item)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$item->kode}}</td>
                        <td>{{$item->nama}}</td>
                        <td>{{$item->bobot}}</td>
                        <td>
                            <a href="{{url('/kriteria/edit', $item->id)}}" type="button" class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="bi bi-pencil-square"></i></a>
                            <a href="{{url('/kriteria/delete', $item->id)}}" onclick="return confirm('Anda Yakin Ingin Menghapus?')" type="button" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus"><i class="bi bi-trash"></i></a>
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