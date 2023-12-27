@include('partials.header')
@include('partials.navbar')
@include('partials.sidebar')
<main id="main" class="main">

    <div class="pagetitle">
      <h1> Data Hotel</h1>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Tambah Data hotek</h5>
    
                  <!-- Floating Labels Form -->
                  <form action="{{url('/hotel/post')}}" method="POST" class="row g-3" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-6">
                      <div class="form-floating">
                        <input type="text" class="form-control" name="nama_hotel" id="nama_hotel" placeholder="Nama Hotel" required>
                        <label for="nama_hotel">Nama Hotel</label>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-floating">
                        <input type="text" class="form-control" name="lokasi" id="alamat" placeholder="Alamat Hotel" required>
                        <label for="alamat">Alamat Hotel</label>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-floating">
                        <input type="text" class="form-control" name="harga" id="harga" placeholder="Harga" required>
                        <label for="harga">Harga</label>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-floating">
                        <input type="file" class="form-control" name="image" id="image" placeholder="Image" required>
                        <label for="image">Image</label>
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
                <h5 class="card-title">Daftar Data Hotel</h5>
                
                <!-- Table with stripped rows -->
                <table class="table datatable">
                    <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Nama Hotel</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Image</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($hotel as $item)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$item->nama_hotel}}</td>
                        <td>{{$item->lokasi}}</td>
                        <td>{{$item->harga}}</td>
                        <td> <img src="Hotel/{{$item->image}}" alt="Profile" style="width: 50px; height: 50px;" class="rounded-circle"></td>
                        <td>
                            <a href="{{url('/hotel/edit', $item->id)}}" type="button" class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="bi bi-pencil-square"></i></a>
                            <a href="{{url('/hotel/delete', $item->id)}}" onclick="return confirm('Anda Yakin Ingin Menghapus?')" type="button" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus"><i class="bi bi-trash"></i></a>
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