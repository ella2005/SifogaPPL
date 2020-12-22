@extends('navs.index')


@section('contentnya')


    <br><br><br><br>
    
           <div class="container">  
            <a href="/materi" class="btn btn-primary pull-left mb-3">Pratinjau</a>
            <!-- <a href="/buat-materi" class="btn btn-primary pull-right">Buat Materi</a> -->
                <table class="table table-bordered">
                  <tbody>
                  @foreach($materi as $m)
                    <tr>
                     <td>{{$m->nama_materi}}</td>
                       <td>
                      <!-- <a href="/tambah-artikel/{{$m->id}}" class="btn btn-info btn-sm" style="display: {{empty($m->artikel) ? "block" : "none"}}">
                        Tambah Artikel
                      </a> -->
                      <a href="/lihat-artikel/{{$m->id}}">Lihat Materi</a>



                        <!-- <a class="btn btn-info btn-sm" style="display: {{empty($m->artikel) ? "none" : "block"}}" href="/lihat-artikel/{{$m->id}}">Lihat Artikel</a> -->
                        
                      </td>
                     

                     <!--  <td><a href="/materi/{{$m->id}}/lihat">Lihat Soal</a>
                        <a href="/materi/{{$m->id}}/buat-soal">Buat Soal</a>
                      </td> -->
                    </tr>
                  @endforeach
                  </tbody>
                </table>  
           </div>  

@endsection
