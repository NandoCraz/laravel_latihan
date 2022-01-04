<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGabungansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gabungans', function (Blueprint $table) {
            $table->id();
            $table->integer('id_angkatan');
            $table->integer('id_kelas');
            $table->integer('tahun_masuk');
            $table->integer('tahun_lulus');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gabungans');
    }
}
