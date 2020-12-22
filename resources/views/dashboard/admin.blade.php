@extends('navs.index')

@section('contentnya')
    <!-- start banner Area -->
    <section class="banner-area relative" id="home">
        <div class="container">
            <div class="row fullscreen d-flex align-items-center justify-content-end">
                <div class="banner-content col-lg-7 col-md-12">
                    <h4 class="text-uppercase">Platform edukasi</h4>
                    <h1>
                        SIFOGA
                    </h1>
                    <p>
                        <h6>Sistem informasi untuk membantu para pemilik kebun buah naga mengenai cara mengelola yang baik agar meningkatkan hasil panen maksimal dan pencegahan gagal panen.<h6>
                    </p>
                    <a href="{{empty(Auth::user()->name) ? "/materi" : "/buka-materi"}}" class="primary-btn header-btn text-uppercase">MATERI</a>
                    <a href="{{empty(Auth::user()->name) ? "/soal-latihan" : "/buka-soal"}}" class="primary-btn header-btn text-uppercase ml-2">soal</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->
@endsection
