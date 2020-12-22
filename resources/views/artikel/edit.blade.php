@extends('navs.index')

@section('styling')
    <script type="text/javascript" src="{{asset('ckeditor/ckeditor.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('style.css')}}">
@endsection
@section('contentnya')
    <div class="bg-light">
        <img
            src="{{ asset('img/fruit-01.jpg') }}"
            alt="" style="opacity: 0.7;position: absolute; width: 100%;" class="position-fixed">
    </div>
    <br><br><br><br>
    <div class="container">
        <div class="card col-12">
            <div class="card-body">
                <h5 class="card-title text-center">Edit Materi</h5>
                <form action="{{url('/send-editing-article')}}" method="POST">
                    {{ csrf_field()}}
                    <div class="col-12">
                        <input type="hidden" name="idnya" value="{{$artikelnya->id}}">
                        <textarea class="ckeditor col-12" id="ckedtor" name="artikel" style="height: 200px;">
			{!!$artikelnya->artikel!!}
		</textarea>
                        <br/>
                        <button class="btn btn-primary">Simpan</button>
                        <a href="/lihat-artikel/{{$artikelnya->id}}" class="btn btn-danger float-right">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    <!-- <a href="/lihat-artikel/{{$artikelnya->id}}">Kembali</a> -->

    </div>


@endsection
