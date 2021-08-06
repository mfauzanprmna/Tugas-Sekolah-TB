<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KursusModel extends Model
{
    use HasFactory;

    protected $table = 'kursus';

    protected $fillable = ['id_kursus', 'kelas', 'paket_keahlian', 'ruangan', 'nipd_walas', 'tahun_pelajaran'];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }
}
