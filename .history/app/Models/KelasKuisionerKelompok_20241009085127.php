<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\SoftDeletes;

class KelasKuisionerKelompok extends Pivot
{
    use SoftDeletes;

    protected $table = 'kelas_kuisioner_kelompok';

    protected $fillable = [
        'kelas_id',
        'bank_penilaian_kelompok_id',
        'deleted_at',
        'created_at',
        'updated_at',
    ];

    belongsTo
}
