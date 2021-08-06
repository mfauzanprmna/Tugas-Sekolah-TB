<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProtaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prota', function (Blueprint $table) {
            $table->id();
            $table->unsignedBiginteger('id_kd');
            $table->integer('tm_gasal');
            $table->integer('jp_gasal');
            $table->integer('tm_genap');
            $table->integer('jp_genap');
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
        Schema::dropIfExists('prota');
    }
}
