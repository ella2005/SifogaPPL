@extends('navs.index')

@section('contentnya')
<!--<div class="bg-light">
    <img
        src="../img/3.png"
        alt="" style="opacity:0.2 ;position: absolute; width: 100%;" class="position-fixed">
</div>-->
<div class="container">  
  <br />  
  <br />  
  @if(session('sukses'))
  <div class="alert alert-success" >
    {{session('sukses')}}
  </div>
  @endif
  @if(session('gagal'))
  <div class="alert alert-primary" >
    {{session('gagal')}}
  </div>
  @endif  
  <h2 align="center">SOAL</h2>    
  
  <a href="/buka-soal/{{$soalnya->tipe_id}}" class="btn btn-info">Kembali</a>
  
  
  <div class="form-group">  
    <form name="add_name" action="{{url('/update-soal')}}" id="add_name" method="POST">
      {{ csrf_field()}}
      <div class="table-responsive">  
        <table class="table table-bordered" id="dynamic_field">  
          <tr>  
            <td>
              
              <br>    
              <input type="hidden" value="{{$soalnya->id}}" name="idSOAL">                                        
              <input type="hidden" value="{{$soalnya->materi_id}}" name="idMATERI">                                        
              <div class="input-group">
                <div class="input-group-prepend">
                  
                </div>
                <input type="text" name="soal" placeholder="Masukkan Soal" class="form-control" aria-label="Text input with radio button" value="{{$soalnya->soalnya}}">
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" aria-label="Radio button for following text input"  name="jwban" value="jwbanA" {{$soalnya->a == $soalnya->jawaban_benar ? "checked" : ""}}>
                  </div>
                </div>
                <input type="text" class="form-control" aria-label="Text input with radio button"  name="a" value="{{$soalnya->a}}">
              </div> <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" aria-label="Radio button for following text input"  onclick="setJawaban()" name="jwban" value="jwbanB" {{$soalnya->b == $soalnya->jawaban_benar ? "checked" : ""}}>
                  </div>
                </div>
                <input name="b" type="text" class="form-control" aria-label="Text input with radio button" value="{{$soalnya->b}}">
              </div> <br>
              <!--<div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" aria-label="Radio button for following text input"  onclick="setJawaban()" name="jwban" value="jwbanC" {{$soalnya->c == $soalnya->jawaban_benar ? "checked" : ""}}>
                  </div>
                </div>
                <input name="c" type="text" class="form-control" aria-label="Text input with radio button" value="{{$soalnya->c}}">
              </div>  -->     
              <br>
            </td>  
            
          </tr>  
        </table>  
      </div>  
      <input type="submit" value="Simpan" class="btn btn-primary float-right">
    </form> 
    
    
    @endsection
    