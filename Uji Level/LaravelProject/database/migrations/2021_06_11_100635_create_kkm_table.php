<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKkmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kkm', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_kd');
            $table->decimal('kompleksitas_ket');
            $table->decimal('kompleksitas_peng');
            $table->decimal('daya_dukung_ket');
            $table->decimal('daya_dukung_peng');
            $table->decimal('intake_ket');
            $table->decimal('intake_peng');
            $table->integer('skala100_ket');
            $table->integer('skala100_peng');
            $table->decimal('skala4_ket');
            $table->decimal('skala4_peng');
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
        Schema::dropIfExists('kkm');
    }
}
