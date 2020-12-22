<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Soal_Jawaban extends Model
{
    protected $table = 'soal_jawaban';
    protected $fillable = ['id','tipe_id','soalnya','a','b','c','jawaban_benar'];


    // public function Tipe_Soal()
    // {
    // 	return $this->belongsTo('App\Materi');
    // }
}
