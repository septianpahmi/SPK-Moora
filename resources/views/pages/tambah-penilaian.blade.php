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
                  <h5 class="card-title">Tambah Data Penilaian</h5>
    
                  <!-- Floating Labels Form -->
                  <form action="{{url('/penilaian/post', $data->id)}}" method="POST" class="row g-3" enctype="multipart/form-data">
                    @csrf
                    @foreach ($kriteria as $kriteriaItem)
                        <div class="col-md-12">
                            <div class="form-floating mb-7">
                                <select class="form-select" name="c{{$kriteriaItem->id}}" id="floatingSelect{{$kriteriaItem->id}}" aria-label="State" required>
                                    @foreach ($kriteriaItem->subkriteria as $sub)
                                        <option value="{{$sub->nilai}}">{{$sub->sub_kriteria}}</option>
                                    @endforeach
                                </select>
                                <label for="floatingSelect{{$kriteriaItem->id}}">{{$kriteriaItem->nama}}</label>
                            </div>
                        </div>
                    @endforeach
                    
                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Submit</button>
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