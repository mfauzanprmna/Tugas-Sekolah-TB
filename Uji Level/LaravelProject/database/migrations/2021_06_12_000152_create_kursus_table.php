<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKursusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kursus', function (Blueprint $table) {
            $table->char('id_kursus')->primary()->unique();
            $table->string('kelas');
            $table->enum('paket_keahlian', ['TKJ', 'MM', 'RPL', 'BC', 'TEI'])->default('TKJ');
            $table->string('ruangan');
            $table->char('nipd_walas', 20);
            $table->string('tahun_pelajaran');
            $table->timestamps();

            $table->foreign('nipd_walas')->references('nipd')->on('guru')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kursus');
    }
}
