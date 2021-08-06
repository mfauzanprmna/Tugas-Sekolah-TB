<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kd', function (Blueprint $table) {
            $table->id();
            $table->decimal('no_kdpeng');
            $table->decimal('no_kdket');
            $table->string('kd_pengetahuan');
            $table->string('kd_keterampilan');
            $table->string('materi_pokok');
            $table->string('pembelajaran');
            $table->string('penilaian');
            $table->string('alokasi_waktu');
            $table->string('sumber_belajar');
            $table->string('semester');
            $table->unsignedBigInteger('id_matpel');
            $table->char('id_guru', 20);
            $table->timestamps();

            $table->foreign('id_matpel')->references('id')->on('mapel')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_guru')->references('nipd')->on('guru')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kd');
    }
}
