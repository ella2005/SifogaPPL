<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Soal_Jawaban extends Model
{
    protected $table = 'penyakit';
    protected $fillable = ['id','tipe_id','soalnya','a','b','c','jawaban_benar'];


    public function Tipe_Penyakit()
    {
    	return $this->belongsTo('App\Materi');
    }
}
