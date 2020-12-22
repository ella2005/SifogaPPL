<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PertanyaanController extends Controller
{
    public function index($id)
    {
    	$idMateri = $id;

    	$materinya = \App\Soal_Jawaban::where('tipe_id','=',$id)->get();
    	return view('welcome',['idMateri' => $idMateri,'materinya' => $materinya]);
    }

    public function indexAdmin($id)
    {
        $idMateri = $id;

        $materinya = \App\Soal_Jawaban::where('tipe_id','=',$id)->get();
        return view('loginAdmin.lihat',['idMateri' => $idMateri,'materinya' => $materinya]);
    }
     public function create(Request $req)
    {
        // dd($req->all());
    	foreach ($req->soal as $i => $sl) {
    		
    		$sj = new \App\Soal_Jawaban;
    		
    		$sj->tipe_id = $req->idMateri;
    		$sj->a = $req->a[$i];
    		$sj->b = $req->b[$i];
    	    //$sj->c = $req->c[$i];
    		
            if ($req->jwban == "jwbanA") {
                $jwbJWB = $req->a[$i];
            }else if ($req->jwban == "jwbanB") {
                $jwbJWB = $req->b[$i];
            }//else if ($req->jwban == "jwbanC") {
               // $jwbJWB = $req->c[$i];
            
            //}
            $sj->jawaban_benar = $jwbJWB;
             
    		$sj->soalnya = $sl;
             // $jawabanFIX[$i];
    		$sj->save();
    	}
    	return redirect()->back();
    }
    public function edit($id)
    {
        $soalnya = \App\Soal_Jawaban::where('id','=',$id)->first();
        return view('soal.edit',['soalnya' => $soalnya]);
    }
    public function update(Request $req)
    {
                if ($req->jwban == "jwbanA") {
                    $jwbJWB = $req->a;
                }else if ($req->jwban == "jwbanB") {
                    $jwbJWB = $req->b;
                }//else if ($req->jwban == "jwbanC") {
                    // $jwbJWB = $req->c;
                //}
        \App\Soal_Jawaban::where('id','=', $req->idSOAL)
            ->update([
                'soalnya' => $req->soal,
                'jawaban_benar' => $jwbJWB,
                'a' => $req->a,
                'b' => $req->b,
                //'c' => $req->c,
                
            ]);

        return redirect()->back()->with('sukses','Berhasil Mengedit Soal');
    }
    public function delete($id)
    {
        \App\Soal_Jawaban::where('id','=', $id)->delete();
        return redirect()->back();
    }
}
