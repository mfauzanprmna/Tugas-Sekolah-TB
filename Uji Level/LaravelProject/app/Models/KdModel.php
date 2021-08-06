<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KdModel extends Model
{
    use HasFactory;

    protected $table = 'kd';

    protected $fillable = ['no_kdpeng', 'no_kdket', 'kd_pengetahuan', 'kd_keterampilan', 'materi_pokok', 'pembelajaran', 'penilaian', 'alokasi_waktu', 'sumber_belajar', 'semester', 'id_guru', 'id_matpel'];
}
