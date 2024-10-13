<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\SoftDeletes;

class UtsPeserta extends Pivot
{
    use HasFactory, SoftDeletes;

    protected $table = 'uts_pesertas'; // Nama table pivot

    protected $fillable = [
        'mahasiswa_id',
        'uts_sesi_id',
    ];

    /**
     * Get the user that owns the UtsPeserta
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'foreign_key', 'other_key');
    }
}
