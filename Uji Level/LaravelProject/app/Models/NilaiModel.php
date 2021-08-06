<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiModel extends Model
{
    use HasFactory;

    protected $table = 'nilai';

    protected $fillable = ['id_siswa', 'id_matpel', 'nilai'];
}
