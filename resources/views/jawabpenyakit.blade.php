@extends('navs.index')

@section('contentnya')
<br><br><br><br><br>
<div class="bg-light">
    <img
        src="../img/3.png"
        alt="" style="opacity:0.2 ;position: absolute; width: 100%;" class="position-fixed">
</div>
<div class="container">
    <div class="col-md-4">
        <a h ref="/buka-materi" class="btn btn-danger"
        style="display: {{!empty(Auth::user()->name) ? "block" : "none"}}">Jangan Pratinjau</a>
    </div>
    @if(session('sukses'))
    <div class="alert alert-success">
        {{session('sukses')}}
    </div>
    @endif
    @if(session('gagal'))
    <div class="alert alert-danger">
        
        <p><strong>{{session('gagal')}}</strong></p>
        <p>Pertanyaan : {{$soal->soalnya}}</p>
        <p>Jawaban Yang Benar : {{$soal->jawaban_benar}}</p>
    </div>
    @endif
    
    <form class="col-md-12" action="{{url('/attemp-now')}}" id="add_name" method="POST">
        {{ csrf_field()}}
        <div class="card">
            <div class="card-header">
                {{-- <h3>Soal No. {{$ls->id }}</h3> --}}
            </div>
            <div class="card-body">
                <h5 class="card-title">{{$soal->soalnya}}</h5>
                
                @php
                $data = \DB::table('cek_soal')->where('soal_id', $soal->id)->get();
                // dd(count($data));
                @endphp
                
                @if (count($data) > 0)
                
                
                <div class="form-check">
                    <input type="hidden" name="idsoal" value="{{$soal->id}}">
                    <input disabled class="form-check-input" type="radio" name="jwb" id="exampleRadios2"
                    value="{{$soal->a}}">
                    <label class="form-check-label">
                        {{$soal->a}}
                    </label>
                </div>
                <div class="form-check">
                    <input disabled class="form-check-input" type="radio" name="jwb" id="exampleRadios2"
                    value="{{$soal->b}}">
                    <label class="form-check-label">
                        {{$soal->b}}
                    </label>
                </div>
                <!--<div class="form-check">
                    <input disabled class="form-check-input" type="radio" name="jwb" id="exampleRadios2"
                    value="{{$soal->c}}">
                    <label class="form-check-label">
                        {{$soal->c}}
                    </label>
                </div>-->
                
                <div class="form-group mt-4">
                    @if ($soal->id == 10)
                    <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModalCenter">
                        Selesai
                    </button>
                    @elseif ($soal->id == 20)
                    <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModalCenter">
                        Selesai
                    </button>
                    @elseif ($soal->id == 25)
                    <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModalCenter">
                        Selesai
                    </button>
                    @else 
                    <a href="/next-soal/{{$soal->id + 1}}" class="btn btn-info float-right">Next</a>
                    @endif
                    <input type="submit" value="KIRIM" class="btn btn-primary float-left">
                    
                </div>
                
                @else 
                
                <div class="form-check">
                    <input type="hidden" name="idsoal" value="{{$soal->id}}">
                    <input class="form-check-input" type="radio" name="jwb" id="exampleRadios2"
                    value="{{$soal->a}}">
                    <label class="form-check-label">
                        {{$soal->a}}
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jwb" id="exampleRadios2"
                    value="{{$soal->b}}">
                    <label class="form-check-label">
                        {{$soal->b}}
                    </label>
                <!--</div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jwb" id="exampleRadios2"
                    value="{{$soal->c}}">
                    <label class="form-check-label">
                        {{$soal->c}}
                    </label>
                </div>-->
                
                <div class="form-group mt-4">
                    @if ($soal->id == 10)
                    <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModalCenter">
                        Selesai
                    </button>
                    @elseif ($soal->id == 20)
                    <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModalCenter">
                        Selesai
                    </button>
                    @elseif ($soal->id == 25)
                    <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModalCenter">
                        Selesai
                    </button>
                    @else 
                    <a href="/next-soal/{{$soal->id + 1}}" class="btn btn-info float-right">Next</a>
                    @endif
                    <input type="submit" value="KIRIM" class="btn btn-primary float-left">
                    
                </div>
                
                @endif
            </div>
        </div>
    </form>
    {{-- a   --}}
    
    <div class="card text-white bg-danger mb-3" style="max-width: 18rem; display: none;">
        <div class="card-header">Header</div>
        <div class="card-body">
            <h5 class="card-title">Danger card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                card's
                content.</p>
            </div>
        </div>
        
        
        
        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        @php
                            $point = \DB::table('temp_point')->value('point');
                            // dd();
                            $point_fix = intval($point * 100);
                        @endphp

                        <!--<p>Point yang diperoleh {{$point_fix}}%</p> -->
                        @if ($point_fix < 31)
                        <p><strong>Maaf anda Tidak Berhasil dalam budidaya buah naga</strong></p>
                        <p><strong>Solusi : Anda harus mencari tau dengan membaca materi pada web ini</strong></p>
                        @elseif($point_fix > 30 && $point_fix < 71)
                        <p><strong>Dipertimbangkan</strong></p>
                        <p><strong>Solusi : Anda harus mencari tau dengan membaca materi pada web ini</strong></p>
                        @elseif($point_fix > 70 && $point_fix <= 100)
                        <p><strong>Selamat Anda sudah melakukan budidaya buah naga yang benar</strong></p>
                        <!--<p><strong>Solusi :</strong></p> -->
                        @endif
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <a href="{{url('selesai')}}">
                            <button type="button" class="btn btn-primary">Reset</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        @endsection