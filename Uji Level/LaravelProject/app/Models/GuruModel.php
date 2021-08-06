<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuruModel extends Model
{
    use HasFactory;

    protected $primaryKey = 'nipd';

    protected $table = 'guru';

    protected $fillable = ['nipd', 'nama', 'photo', 'bidang', 'jabatan', 'email', 'password'];
}
