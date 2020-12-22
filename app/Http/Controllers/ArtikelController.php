<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function indexBuat($id)
    {
    	$idnya = $id;
    	return view('artikel.tambah',['idnya' => $idnya] );
    }
    public function create(Request $req)
    {
    	\App\Materi::where('id','=', $req->idnya)
    	->update(['artikel' => $req->artikel]);


    	return redirect('/buka-materi');
    }
    public function lihat($id)
    {
    	$materinya = \App\Materi::where('id','=',$id)->first();
    	return view('artikel',['materinya' => $materinya]);
    }
    public function edit($id)
    {
        $idnya = $id;
        $artikelnya = \App\Materi::where('id','=',$id)->first();
        return view('artikel.edit',['artikelnya' => $artikelnya,'idnya' => $idnya]);
    }
    public function update(Request $req)
    {
        \App\Materi::where('id','=', $req->idnya)
        ->update([
            'artikel' => $req->artikel
        ]);
        return redirect()->back();
    }
}
