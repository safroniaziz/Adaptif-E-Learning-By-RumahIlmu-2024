<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UtsSoal extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'uts_id',
        'bank_soal_pembahasan_id',
    ];
}
