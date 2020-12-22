<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class MateriController extends Controller
{
    public function index()
    {
    	return view('materi.index');   
   	}
   	public function create(Request $req)
   	{
   		$mt = new \App\Materi;
   		$mt->id = mt_rand(1000,1999);
   		$mt->nama_materi = $req->materi;
   		$mt->save();

   		return redirect('/buka-materi');
   	}
}
