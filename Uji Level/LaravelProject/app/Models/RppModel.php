<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RppModel extends Model
{
    use HasFactory;

    protected $table = 'rpp';

    protected $fillable = ['id_kd', 'tujuan_pembelajaran', 'ipk_pengetahuan', 'ipk_keterampilan', 'materi_pembelajaran'];
}
