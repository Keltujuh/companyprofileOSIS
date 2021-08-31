@extends('layouts.app')
@section('title', 'Beranda')
@section('section')
    <div class="card bg-dark rounded-0 text-white overflow-hidden" style="height: 100vh !important;">
        <img src="{{ asset('img/bgsmk.jpg') }}" class="img-fluid" alt="..." style="transform:translateY(-18rem); filter:brightness(50%);">
        <div class="card-img-overlay d-flex align-items-center">
            <div class="container">
                <h2 class="card-title fs-1">
                    Osis company
                </h2>
            </div>
        </div>
    </div>

    <section class="section intro">
        <div class="container">
            <div class="section-title">
                <h2 class="mt-3 content-title d-flex justify-content-center">Visi Misi</h2>
            </div>

            <div class="justify-content-center">
                <div class="visi">
                    <h3>Visi</h3>
                    <p>Mewujudkan cita-cita atau harapan sekolah menjadikan kita lebih berprestasi, kreatif, inovatif dan bertanggungjawab serta lebih perduli akan lingkungan sekitar yang dilandasi iman dan taqwa.</p>
                </div>
                <div class="misi mt-4">
                    <h3>Misi</h3>
                    <div class="misi-wrap row gx-3 align-items-stretch">
                                        
                        <div class="col">
                            <div class="shadow card h-100">
                                <div class="card-body">
                                    Memperlihatkan karya seni siswa siswi SMK Mahaputra.
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="shadow card h-100">
                                <div class="card-body">
                                    Mengasah softskill dengan mengadakan kegiatan muhadoroh sebelum kegiatan ibadah sholat jum'at dilaksanakan.
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="shadow card h-100">
                                <div class="card-body">
                                    Mengadakan aspirasi dari seluruh siswa OSIS.
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="shadow card h-100">
                                <div class="card-body">
                                    Mendukung potensi para siswa baik dari segi pengetahuan maupun keterampilan.
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="mt-5">
        <div class="card bg-dark rounded-0 text-white overflow-hidden" style="height: 100vh !important;">
            <img src="{{ asset('img/bgsmk.jpg') }}" class="img-fluid" alt="..." style="transform:translateY(-18rem); filter:brightness(30%);">
            <div class="card-img-overlay">
                <div class="container">
                    <h2 class="card-title text-center">Bertia Terbaru</h2>
                    <div class="row g-4">
                        <div class="col-6 col-md-3">
                            <div class="card border-0 bg-transparent" style="width: 18rem;">
                                <img src="{{ asset('img/bgsmk.jpg') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">Judul Blog</h5>
                                  <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus repellendus laborum fuga suscipit debitis voluptatum aperiam, veritatis maxime consequuntur ratione.</p>
                                  <a href="#" class="btn btn-outline-primary rounded-pill">Lihat</a>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection