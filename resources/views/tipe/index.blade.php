@extends('navs.index')

@section('contentnya')
<br><br><br><br>

           <div class="container">  
           <div class="col-md-4">
    
</div>
<h1>Soal :</h1>
<br>
                <table class="table table-bordered">
                  <thead>
                    <th>Tipe Soal</th>
                    <th>BUKA</th>
                  </thead>
                  <tbody>
                  @foreach($tipe as $m)
                    <tr>
                      <td>{{$m->tipe}}</td>
                      <td><a href="/buka-soal/{{$m->id}}">LIHAT SOAL</a></td>
                    </tr>
                  @endforeach
                  </tbody>
                </table>  
           </div>  
      @endsection