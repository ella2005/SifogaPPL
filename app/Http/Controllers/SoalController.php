<?php

namespace App\Http\Controllers;

use App\Jawaban;
use App\Soal_Jawaban;
use Illuminate\Http\Request;

class SoalController extends Controller
{



    public function index()
    {
        $materi = \App\Materi::All();
        return view('materi', ['materi' => $materi]);
    }
    public function indexAdmin()
    {
        $materi = \App\Materi::All();
        return view('loginAdmin.materi', ['materi' => $materi]);
    }
    public function AdminSoal()
    {

        $tipe = \App\Tipe_Soal::All();
        // return view('soal.index',['tipe' => $tipe]);
        return view('tipe.index', ['tipe' => $tipe]);
    }
    public function jawab($id)
    {
        $Ceksoal = \App\Soal_Jawaban::where('tipe_id', '=', $id)->first();
        if (empty($Ceksoal)) {
            $soal = 'kosong';
        } else {
            $soal = \App\Soal_Jawaban::where('tipe_id', '=', $id)->first();
        }
        $idweb = $id;
        return view('garap', ['soal' => $soal, 'idweb' => $idweb]);
    }

    public function nextSoal($id)
    {
        $soal = Soal_Jawaban::findOrFail($id);
        $linkSoal = \App\Soal_Jawaban::where('tipe_id', '=', $soal->tipe_id)->get();

        return view('jawabsoal', ['soal' => $soal, 'linkSoal' => $linkSoal]);
        // dd($data);

    }

    public function jawabSoal($idsoal)
    {
        // dd($idsoal);
        $soal = \App\Soal_Jawaban::where('id', '=', $idsoal)->first();
        $linkSoal = \App\Soal_Jawaban::where('tipe_id', '=', $soal->tipe_id)->get();

        return view('jawabsoal', ['soal' => $soal, 'linkSoal' => $linkSoal]);
    }
    public function jwb(Request $request)
    {
        $jawaban = \App\Soal_Jawaban::where('id', '=', $request->idsoal)->first();

        $jwbBenar = $jawaban->a;
        $jwbBenar1 = $jawaban->b;
        $jwbBenar2 = $jawaban->c;

        $jawabanUser = $request->jwb;

        // dd($jawabanUser);

        if ($jawabanUser == $jwbBenar) {
            $point = $jawaban->point_a;
        } elseif ($jawabanUser == $jwbBenar1) {
            $point = $jawaban->point_b;
        } elseif ($jawabanUser == $jwbBenar2) {
            $point = $jawaban->point_c;
        } else {
            $point = 0;
        };


        $temp_point = \DB::table('temp_point')->where('id', 1)->value('point');

        // dd(floatval($temp_point));

        \DB::table('temp_point')->where('id', 1)->update([
            'point' => floatval($temp_point) + floatval($point),
        ]);

        if ($jawabanUser != null) {

            \DB::table('cek_soal')->insert([
                'soal_id' => $request->idsoal,
                'session_id' => '1',
            ]);
        }

        if ($jwbBenar == $jawabanUser) {
            return redirect()->back()->with('sukses', '');
        } else {
            return redirect()->back()->with('gagal', '');
        }

        // return $hasil;
    }
    public function indexTipe()
    {
        $tipe = \App\Tipe_Soal::All();
        return view('soal.index', ['tipe' => $tipe]);
    }

    public function selesai()
    {
        \DB::table('cek_soal')->where('session_id', 1)->delete();
        \DB::table('temp_point')->where('id', 1)->update([
            'point' => "0",
        ]);

        return redirect('/');
    }
}
