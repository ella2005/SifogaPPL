<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
	protected $table = 'materi';
    protected $fillable = ['id','nama_materi'];


    public function Soal_Jawaban()
    {
    	return $this->hasMany('App\Soal_Jawaban');
    }
}
