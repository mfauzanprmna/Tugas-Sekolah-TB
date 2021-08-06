<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuruTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guru', function (Blueprint $table) {
            $table->char('nipd')->primary();
            $table->string('nama');
            $table->string('photo');
            $table->enum('bidang', ['Kurikulum', 'KKG', 'POKJA', 'Admin'])->default('KKG');
            $table->enum('jabatan', ['Waka', 'Ketua', 'Kaprog', 'Sekretaris', 'Walas', 'Guru', 'Admin'])->default('Guru');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('guru');
    }
}
