<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\SoftDeletes;

class UtsSoal extends Pivot
{
    use HasFactory, SoftDeletes;

    protected $table = 'uts_soals'; // Nama table pivot

    protected $fillable = [
        'uts_id',
        'bank_soal_pembahasan_id',
    ];
}
