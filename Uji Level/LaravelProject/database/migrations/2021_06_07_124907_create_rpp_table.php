<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRppTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rpp', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_kd');
            $table->string('tujuan_pembelajaran');
            $table->string('ipk_pengetahuan');
            $table->string('ipk_keterampilan');
            $table->string('materi_pembelajaran');
            $table->timestamps();

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
        Schema::dropIfExists('rpp');
    }
}
