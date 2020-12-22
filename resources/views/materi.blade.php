@extends('navs.index')

@section('contentnya')
<div class="bg-light">
    <img
        src="../img/3.png"
        alt="" style="opacity:0.2 ;position: absolute; width: 100%;" class="position-fixed">
</div>
    <br><br><br>
    <div class="container" style="top: 10cm;">
        <nav aria-label="breadcrumb" class="mt-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Beranda</a></li>
                <li class="breadcrumb-item active" aria-current="page">Materi</li>
            </ol>
        </nav>
        <div class=" row mt-5 mb-10" >
            <h1 class="col-12 mb-3">Materi :</h1>
            @foreach($materi as $m)
                <div class="card text-black bg- mb-3 col-sm-5 ml-4 mr-4">
                    <div class="card-header">{{$m->id}}. {{$m->nama_materi}}
                        <div class="button-group-area mt-10 float-right ">
                            <a href="/lihat-artikel/{{$m->id}}" class="genric-btn success circle arrow">Pelajari</span></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
