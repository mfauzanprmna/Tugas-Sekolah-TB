<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MatpelModel extends Model
{
    use HasFactory;

    protected $table = 'mapel';

    protected $fillable = ['nama_matpel', 'matpel_kelas', 'id_guru'];
}
