<?php

namespace App\Http\Controllers;

use App\Penyakit;
use App\Penyakit_Jawaban;
use Illuminate\Http\Request;
use App\Tipe_Penyakit;

class PenyakitController extends Controller
{



    public function index()
    {
        $penyakit = Tipe_Penyakit::all();
        // dd($penyakit);  
        return view('penyakit.index', compact('penyakit'));
    }
    public function indexAdmin()
    {
        $materi = \App\Materi::All();
        return view('loginAdmin.materi', ['materi' => $materi]);
    }
    public function AdminPenyakit()
    {

        $tipe = \App\Tipe_Penyakit::All();
        // dd($tipe);
        // return view('soal.index',['tipe' => $tipe]);
        return view('tipe.index', ['tipe' => $tipe]);
    }
    public function jawab($id)
    {
        $Ceksoal = \App\Penyakit_Jawaban::where('tipe_id', '=', $id)->first();
        if (empty($Ceksoal)) {
            $soal = 'kosong';
        } else {
            $soal = \App\Penyakit_Jawaban::where('tipe_id', '=', $id)->first();
        }
        $idweb = $id;
        return view('garap', ['soal' => $soal, 'idweb' => $idweb]);
    }

    public function nextSoal($id)
    {
        $soal = Penyakit_Jawaban::findOrFail($id);
        $linkSoal = \App\Penyakit_Jawaban::where('tipe_id', '=', $soal->tipe_id)->get();

        return view('jawabsoal', ['soal' => $soal, 'linkSoal' => $linkSoal]);
        // dd($data);

    }

    public function jawabSoal($idsoal)
    {
        $soal = \App\Penyakit_Jawaban::where('id', '=', $idsoal)->first();
        $linkSoal = \App\Penyakit_Jawaban::where('tipe_id', '=', $soal->tipe_id)->get();

        return view('jawabsoal', ['soal' => $soal, 'linkSoal' => $linkSoal]);
    }
    public function jwb(Request $request)
    {
        $jawaban = \App\Penyakit_Jawaban::where('id', '=', $request->idsoal)->first();

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

            \DB::table('cek_penyakit')->insert([
                'soal_id' => $request->idsoal,
                'session_id' => '1',
            ]);
        }

        if ($jwbBenar == $jawabanUser) {
            return redirect()->back()->with('sukses', 'Jawaban Anda Benar');
        } else {
            return redirect()->back()->with('gagal', 'Jawaban Anda KUrang Tepat');
        }

        // return $hasil;
    }
    public function indexTipe()
    {
        $tipe = \App\Tipe_Penyakit::All();
        return view('soal.index', ['tipe' => $tipe]);
    }

    public function selesai()
    {
        \DB::table('cek_penyakit')->where('session_id', 1)->delete();
        \DB::table('temp_point')->where('id', 1)->update([
            'point' => "0",
        ]);

        return redirect('/');
    }
}
