@extends('navs.index')
<div class="bg-light">
    <img
        src="../img/3.png"
        alt="" style="opacity:0.2 ;position: absolute; width: 100%;" class="position-fixed">
</div>
@section('contentnya')
    <br><br><br><br>
    <div class="bg-light">
    <img
        src="../img/3.png"
        alt="" style="opacity:0.2 ;position: absolute; width: 100%;" class="position-fixed">
</div>
        <div class="container mt-4">
            <nav aria-label="breadcrumb" class="mt-4">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/soal-latihan') }}">Soal</a></li>
                    <li class="breadcrumb-item active" aria-current="page">jawab soal</li>
                </ol>
            </nav>

        <div class="col-md-4">
            <a href="/buka-materi" class="btn btn-danger"
               style="display: {{!empty(Auth::user()->name) ? "block" : "none"}}">Jangan Pratinjau</a>
        </div>



        <br>

        <a href=""></a>
        <div class="col-md-4">

        </div>
        <div class="form-group">

        </div>


        <div class="card col-sm-6 text-center">
            <div class="card-header">
                <h4 align="center">Kerjakan soal</h4>
            </div>
            <div class="card-body">
                <p class="card-text">Anda Yakin Ingin Mengerjakan Soal Sekarang.</p>
                <a href="{{$soal=='kosong' ? '/soal-latihan' : "/jawab/$soal->id"}}" class="btn btn-primary mt-4 float-left">
                    {{$soal=='kosong' ? 'Belum Ada Soal' : "Kerjakan Sekarang"}}
                </a>
                <a href="/soal-latihan" class="btn btn-danger mt-4 float-right">Kembali</a>
            </div>
        </div>
    </div>



@endsection
