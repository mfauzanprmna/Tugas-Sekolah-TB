<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiswaModel extends Model
{
    use HasFactory;

    protected $primaryKey = 'nisn';

    protected $table = 'siswa';

    protected $fillable = ['nisn', 'nama', 'telepon', 'photo', 'tingkat', 'jurusan', 'id_kelas', 'email', 'password'];

    // public function kursus()
    // {
    //     return $this->hasMany(Kursus::class);
    // }
}
