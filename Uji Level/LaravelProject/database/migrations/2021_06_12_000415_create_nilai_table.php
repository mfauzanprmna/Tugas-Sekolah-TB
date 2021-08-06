<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNilaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilai', function (Blueprint $table) {
            $table->id();
            $table->char('nisn_siswa');
            $table->unsignedBiginteger('id_kd');
            $table->decimal('tugas');
            $table->decimal('uh');
            $table->decimal('uts');
            $table->decimal('uas');
            $table->decimal('proses');
            $table->decimal('produk');
            $table->decimal('projek');
            $table->timestamps();

            $table->foreign('nisn_siswa')->references('nisn')->on('siswa')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_kd')->references('id')->on('kd')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nilai');
    }
}
