<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KiModel extends Model
{
    use HasFactory;

    protected $table = 'ki';

    protected $fillable = ['nama_kompetensi', 'kode_kompetensi', 'id_matpel'];
}
