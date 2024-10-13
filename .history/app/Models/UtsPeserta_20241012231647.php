<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UtsPeserta extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'uts_soals'; // Nama table pivot

    protected $fillable = [
        'bank_soal_pembahasan_id',
        'uts_sesi_id',
    ];
}
