@extends('navs.index')

@section('contentnya')
    <br>
    <br>
    <br>
    <div class="bg-light">
    <!--<img
        src="../img/3.png"
        alt="" style="opacity:0.2 ;position: absolute; width: 100%;" class="position-fixed">
    </div> -->
    <div class="container mt-4">
        <nav aria-label="breadcrumb" class="mt-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Beranda</a></li>
                <li class="breadcrumb-item"><a href="{{ url('/materi') }}">Materi</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$materinya->nama_materi}}</li>
            </ol>
        </nav>
        <h1 class="mt-4 text-info">{{empty($materinya->artikel) ? "Belum ada artikel" : "MATERI :"}}</h1>

        <div class="section-top-border">
            <h3 class="card-title">{{$materinya->nama_materi}}</h3>
            <div class="row">
                <div class="col-lg-12">
                    <blockquote class="generic-blockquote">
                        <p class="card-text mt-4">
                            <a href="/tambah-artikel/{{$materinya->id}}" class="btn btn-outline-dark"
                               style="display: {{empty($materinya->artikel) && !empty(Auth::user()->name) ? "block" : "none"}}">
                                Tambah Artikel
                            </a>


                            {!!$materinya->artikel!!}

                        </p>
                        <footer class="blockquote-footer mt-4">Artikel dibuat oleh<cite title="Source Title"> SIFOGA</cite></footer>
                    </blockquote>
                </div>
            </div>
            <a href="/edit-artikel/{{$materinya->id}}" class="btn btn-outline-dark m-2"
               style="display: {{!empty($materinya->artikel) && !empty(Auth::user()->name) ? "block" : "none"}}; width: 50px;">
         Edit
        </a>
               <!--<img src="{{ asset('img/icon/edit.svg') }}" alt="edit" style="height: 25px;" class="mr-4">
            </a>Edit Artikel -->
            <a href="/buka-materi" class="btn btn-info float-right" style="display: {{!empty(Auth::user()->name) ? "block" : "none"}}">
         Kembali
        </a>
        </div>

        
        <!--<a href="/buka-materi" style="display: {{!empty(Auth::user()->name) ? "block" : "none"}}" class="btn btn-danger float-right">
           <span> Jangan Pratinjau </span>
        </a> -->
    </div>

@endsection
