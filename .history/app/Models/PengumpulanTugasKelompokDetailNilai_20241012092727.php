<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PengumpulanTugasKelompokDetailNilai extends Model
{
    use HasFactory ,SoftDeletes;

    protected $guarded = [];

    /**
     * Get the pengumpulanTugasKelompok that owns the PengumpulanTugasKelompokDetailNilai
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pengumpulanTugasKelompok(): BelongsTo
    {
        return $this->belongsTo(User::class, 'foreign_key', 'other_key');
    }
}
