@extends('navs.index')

@section('styling')
	<script type="text/javascript" src="{{asset('ckeditor/ckeditor.js')}}"></script>
	<link rel="stylesheet" type="text/css" href="{{asset('style.css')}}">
@endsection
@section('contentnya')
       <form action="{{url('/send-article')}}" method="POST">
                        {{ csrf_field()}}
 		<input type="hidden" name="idnya" value="{{$idnya}}">
		<textarea class="ckeditor" id="ckedtor" name="artikel"></textarea>
		<br/>
		<button class="btn btn-primary">Simpan</button>
		<div class="col-md-4">
    <a href="/buka-materi" class="btn btn-danger">Kembali</a>
</div>
	</form>

@endsection