<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipe_Penyakit extends Model
{
    protected $table = 'tipe_penyakit';

    public function Penyakit()
    {
    	return $this->hasMany('App\Penyakit');
    }
}
