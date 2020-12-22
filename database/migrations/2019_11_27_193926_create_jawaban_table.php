<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJawabanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('soal_jawaban', function (Blueprint $table) {
            $table->string('point_a')->nullable();
            $table->string('point_b')->nullable();
            $table->string('point_c')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('soal_jawaban', function (Blueprint $table) {
            $table->dropColumn('point_a');
            $table->dropColumn('point_b');
            $table->dropColumn('point_c');
        });
    }
}
