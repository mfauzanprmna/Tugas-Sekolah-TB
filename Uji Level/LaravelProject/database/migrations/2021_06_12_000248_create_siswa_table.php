<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->char('nisn', 20)->primary();
            $table->string('nama');
            $table->char('telepon', 20);
            $table->string('photo');
            $table->enum('tingkat', ['X', 'XI', 'XII']);
            $table->enum('jurusan', ['RPL', 'TKJ', 'TEI', 'MM', 'BC']);
            $table->string('id_kelas');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('id_kelas')->references('id_kursus')->on('kursus')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswa');
    }
}
