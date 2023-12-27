@include('partials.header')
@include('partials.navbar')
@include('partials.sidebar')
<main id="main" class="main">

    <div class="pagetitle">
      <h1> Edit Hotel</h1>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Edit Data hotek</h5>
    
                  <!-- Floating Labels Form -->
                  <form action="{{url('/hotel/edit/update', $hotel->id)}}" method="POST" class="row g-3" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-6">
                      <div class="form-floating">
                        <input type="text" class="form-control" value="{{$hotel->nama_hotel}}" name="nama_hotel" id="nama_hotel" placeholder="Nama Hotel" required>
                        <label for="nama_hotel">Nama Hotel</label>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-floating">
                        <input type="text" class="form-control" name="lokasi" value="{{$hotel->lokasi}}" id="alamat" placeholder="Alamat Hotel" required>
                        <label for="alamat">Alamat Hotel</label>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-floating">
                        <input type="text" class="form-control" name="harga" value="{{$hotel->harga}}" id="harga" placeholder="Harga" required>
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
                      <button type="submit" class="btn btn-primary">Update</button>
                      <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                  </form><!-- End floating Labels Form -->
    
                </div>
              </div>

            </div>
      </div>
    </section>

  </main><!-- End #main -->
@include('partials.footer')