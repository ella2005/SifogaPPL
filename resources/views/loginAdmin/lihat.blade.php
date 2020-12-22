@extends('navs.index')

@section('contentnya')
<!--<div class="bg-light">
    <img
        src="../img/3.png"
        alt="" style="opacity:0.2 ;position: absolute; width: 100%;" class="position-fixed">
</div> -->
<div class="container">  
  <br><br><br> 
  <h2 align="center"><br><br>Lihat Soal</h2>  
  <a href="/buka-soal" class="btn btn-outline-primary">Kembali</a>
  <a href="/buka-soal/{{$idMateri}}/buat" class="btn btn-outline-success float-right">Tambah Soal</a>
  
  <div class="form-group">  
    
    <br>
    
    @foreach($materinya as $m)      
    <table class="table table-bordered {{$m->tipe_id == "1" ? "table-primary" : ""}} {{$m->tipe_id == "2" ? "table-success" : ""}} {{$m->tipe_id == "3" ? "table-warning" : ""}} " id="dynamic_field">  
      <tr>  
        <td>                         
          <br>                                            
          <div class="input-group">
            <div class="input-group-prepend">
              
            </div>
            <input type="hidden" name="idSOAL" value="">
            <input type="text" class="form-control" aria-label="Text input with radio button" value="{{$m->soalnya}}">
          </div>
          <br>
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <input type="radio" aria-label="Radio button for following text input" {{$m->a == $m->jawaban_benar ? "checked" : ""}}  {{$m->a == $m->jawaban_benar ? "" : "disabled"}}>
              </div>
            </div>
            <input value="{{$m->a}}" type="text" class="form-control" aria-label="Text input with radio button"></div> <br>
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <input type="radio" aria-label="Radio button for following text input" {{$m->b == $m->jawaban_benar ? "checked" : ""}}  {{$m->a == $m->jawaban_benar ? "" : "disabled"}}>
                </div>
              </div>
              <input value="{{$m->b}}" type="text" class="form-control" aria-label="Text input with radio button">
            </div> <br>
           <!-- <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <input type="radio" aria-label="Radio button for following text input" {{$m->c == $m->jawaban_benar ? "checked" : ""}}  {{$m->a == $m->jawaban_benar ? "" : "disabled"}}>
                </div>
              </div>
              <input value="{{$m->c}}" type="text" class="form-control" aria-label="Text input with radio button">
            </div>       
            <br>-->
          </td>  
          <td>
            <div class="form-group">
              <br>
              <div>
                <a href="/edit-soal/{{$m->id}}" class="btn btn-outline-green col-md-12">Edit</a>
              </div>
              
              <br>
              <div>
                <a href="/delete-soal/{{$m->id}}" class="btn btn-outline-danger col-md-12">Hapus</a>
              </div>
            </div>
          </td>  
        </tr>  
      </table>  
      
      
      
      
      @endforeach
      
    </div>  
  </div>  
  @endsection