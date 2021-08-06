<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ki', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kompetensi');
            $table->string('kode_kompetensi');
            $table->unsignedBiginteger('id_matpel');
            $table->timestamps();

            $table->foreign('id_matpel')->references('id')->on('mapel')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ki');
    }
}
