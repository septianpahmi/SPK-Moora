@include('partials.header')
@include('partials.navbar')
@include('partials.sidebar')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Edit Sub Kriteria</h1>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Edit Data Sub kriteria</h5>
    
                  <!-- Floating Labels Form -->
                  <form action="{{url('/sub-kriteria/edit/update', $data->id)}}" method="POST" class="row g-3">
                    @csrf
                    <div class="col-md-6">
                      <div class="form-floating">
                        <input type="text" class="form-control" value="{{$data->sub_kriteria}}" name="sub_kriteria" id="nama" placeholder="Nama Kriteria">
                        <label for="nama">Nama Kriteria</label>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-floating">
                        <input type="text" class="form-control" value="{{$data->nilai}}" name="nilai"  id="bobot" placeholder="Bobot">
                        <label for="bobot">Nilai</label>
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