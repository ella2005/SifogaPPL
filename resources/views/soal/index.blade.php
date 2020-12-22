@extends('navs.index')
<!--<div class="bg-light">
    <img
        src="../img/3.png"
        alt="" style="opacity:0.2 ;position: absolute; width: 100%;" class="position-fixed">
</div>-->
@section('contentnya')

           <br><br><br>
           <div class="bg-dark">
               <div class="modal" tabindex="-1" role="dialog">
                   <div class="modal-dialog" role="document">
                       <div class="modal-content">
                           <div class="modal-header">
                               <h5 class="modal-title">Modal title</h5>
                               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                   <span aria-hidden="true">&times;</span>
                               </button>
                           </div>
                           <div class="modal-body">
                               <p>Modal body text goes here.</p>
                           </div>
                           <div class="modal-footer">
                               <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                               <button type="button" class="btn btn-primary">Save changes</button>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           <div class="container" style="top: 10cm;">
               <nav aria-label="breadcrumb" class="mt-4">
                   <ol class="breadcrumb">
                       <li class="breadcrumb-item"><a href="{{ url('/') }}">Beranda</a></li>
                       <li class="breadcrumb-item active" aria-current="page">Soal</li>
                   </ol>
               </nav>
               <div class=" row mt-5 mb-10" >
                   <h1 class="col-12 mb-3">Soal :</h1>
                   @foreach($tipe as $m)
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
