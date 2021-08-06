<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KkmModel extends Model
{
    use HasFactory;

    protected $table = 'kkm';

    protected $fillable = ['id_kd', 'kompleksitas', 'daya_dukung', 'intake', 'skala100', 'skala4'];
}
