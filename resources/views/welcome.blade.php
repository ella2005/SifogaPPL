@extends('navs.index')

@section('contentnya')
<div class="container">  
  <br />  
  <br />  
  <br><br><br><h2 align="center">Buat Soal</h2>    
  
  <a href="/buka-soal/{{$idMateri}}" class="btn btn-info">Kembali</a>
  
  
  <div class="form-group">  
    <form name="add_name" action="{{url('/buat-soal')}}" id="add_name" method="POST">
      {{ csrf_field()}}
      <div class="table-responsive">  
        <input type="hidden" name="idMateri" value="{{$idMateri}}">
        <table class="table table-bordered" id="dynamic_field">  
          <tr>  
            <td>
              
              <br>                                            
              <div class="input-group">
                <div class="input-group-prepend">
                  
                </div>
                <input type="text" name="soal[]" placeholder="Masukkan Soal" class="form-control" aria-label="Text input with radio button">
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio"  onclick="setJawaban()" aria-label="Radio button for following text input"  name="jwban" value="jwbanA">
                  </div>
                </div>
                <input type="text" class="form-control" aria-label="Text input with radio button"  name="a[]">
              </div> <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" aria-label="Radio button for following text input"  onclick="setJawaban()" name="jwban" value="jwbanB">
                  </div>
                </div>
                <input name="b[]" type="text" class="form-control" aria-label="Text input with radio button">
              </div> <br>
              <!--<div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio" aria-label="Radio button for following text input"  onclick="setJawaban()" name="jwban" value="jwbanC">
                  </div>
                </div>
                <input name="c[]" type="text" class="form-control" aria-label="Text input with radio button">
              </div>
              -->   
              <br>
              <!-- <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="radio"  onclick="setJawaban()" aria-label="Radio button for following text input" name="jwban" value="jwbanD">
                  </div>
                </div>
                <input name="d[]" type="text" class="form-control" aria-label="Text input with radio button">
              </div>-->
            </td>  
            
          </tr>  
        </table>  
      </div>  
      <button type="submit" class="btn btn-primary">Simpan</button> 
    </form> 
    
    
    
    
    @endsection
    <!--  <script>  
      $(document).ready(function(){  
        
        var i=1;  
        var pp = 10;
        $('#add').click(function(){  
          i++;  
          // for (var i = 0; i < pp; i++) {
            
            $('#dynamic_field').append('<tr id="row'+i+'"><td><br><div class="input-group"><div class="input-group-prepend"></div><input type="text" name="soal[]" placeholder="Masukkan Soal" class="form-control" aria-label="Text input with radio button"></div><br><div class="input-group">  <div class="input-group-prepend">    <div class="input-group-text">    <input type="radio" aria-label="Radio button for following text input"  name="jwbanA[]">    </div>  </div>  <input type="text" class="form-control" aria-label="Text input with radio button"  name="a[]"></div> <br><div class="input-group">  <div class="input-group-prepend">    <div class="input-group-text">    <input type="radio" aria-label="Radio button for following text input" name="jwbanB[]"></div>  </div>  <input name="b[]" type="text" class="form-control" aria-label="Text input with radio button"></div> <br><div class="input-group">  <div class="input-group-prepend">    <div class="input-group-text">    <input type="radio" aria-label="Radio button for following text input" name="jwbanC[]">    </div>  </div>  <input name="c[]" type="text" class="form-control" aria-label="Text input with radio button"></div><br><div class="input-group"><div class="input-group-prepend">    <div class="input-group-text">    <input type="radio" aria-label="Radio button for following text input" name="jwbanD[]">    </div>  </div>  <input name="d[]" type="text" class="form-control" aria-label="Text input with radio button"></div> </td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
            // }
          });  
          $(document).on('click', '.btn_remove', function(){  
            var button_id = $(this).attr("id");   
            $('#row'+button_id+'').remove();  
          });  
          
        });  
      </script> -->