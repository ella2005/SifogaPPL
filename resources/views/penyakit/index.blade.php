@extends('navs.index')
<!--<div class="bg-light">
    <img
        src="../img/3.png"
        alt="" style="opacity:0.2 ;position: absolute; width: 100%;" class="position-fixed">
</div>-->
@section('contentnya')

           <div class="container" style="top: 10cm;">
               <nav aria-label="breadcrumb" class="mt-4">
                   <ol class="breadcrumb">
                       <li class="breadcrumb-item"><a href="{{ url('/') }}">Beranda</a></li>
                       <li class="breadcrumb-item active" aria-current="page">Penyakit</li>
                   </ol>
               </nav>
               <div class=" row mt-5 mb-10" >
                   <h1 class="col-12 mb-3">Penyakit :</h1>
                   @foreach($penyakit as $m)
                       <div class="card text-black bgcolor-purple mb-3 col-sm-5 ml-4 mr-4">
                           <div class="card-header">{{$m->tipe}}
                               <div class="button-group-area mt-10 float-right ">
                                   <a href="/soal-latihan/{{$m->id}}" class="genric-btn success circle arrow">LIHAT SOAL</a>
                               </div>
                           </div>
                       </div>
                   @endforeach
               </div>
           </div>
      @endsection
