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
            @foreach ($data as $data)
                
            <div class="card">
                <div class="card-body">
                <h5 class="card-title">{{$data->nama}}({{$data->kode}}) </h5>
                <div class="text-end">
                    <a href="{{url('/sub-kriteria/tambah', $data->id)}}" type="button" class="btn btn-success">Tambah</a>
                </div>
                
                <!-- Table with stripped rows -->
                <table class="table datatable">
                    <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Nama Hotel</th>
                        <th scope="col">Nilai</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($data->subkriteria as $item)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$item->sub_kriteria}}</td>
                        <td>{{$item->nilai}}</td>
                        <td>
                            <a href="{{ url('/sub-kriteria/edit',$item->id) }}" type="button" class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="bi bi-pencil-square"></i></a>
                            <a href="{{url('/sub-kriteria/delete', $item->id)}}" onclick="return confirm('Anda Yakin Ingin Menghapus?')" type="button" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                <!-- End Table with stripped rows -->

                </div>
            </div>
            @endforeach

            </div>
      </div>
    </section>

  </main><!-- End #main -->
@include('partials.footer')