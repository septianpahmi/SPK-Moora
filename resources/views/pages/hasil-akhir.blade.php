@include('partials.header')
@include('partials.navbar')
@include('partials.sidebar')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Hasil Akhir</h1>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
                
            <div class="card">
                <div class="card-body">
                <h5 class="card-title">Hasil Akhir Perhitungan</h5>
                <!-- Table with stripped rows -->
                <table class="table datatable">
                    <thead>
                    <tr>
                        <th scope="col">Nama Hotel</th>
                        <th scope="col">Nilai Yi</th>
                        <th scope="col">Rank</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($sortedYi as $sortedItem)
                    <tr>
                        <td>{{ $sortedItem['hotel'] }}</td>
                        <td>{{ number_format($sortedItem['totalYi'], 4) }}</td>
                        <th scope="row">{{$loop->iteration}}</th>
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