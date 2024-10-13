<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DiskusiRespon extends Model
{
    use HasFactory, Sof;

    protected $guarded = [];

    /**
     * Get the diskusi that owns the DiskusiRespon
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function diskusi(): BelongsTo
    {
        return $this->belongsTo(Diskusi::class, 'diskusi_id', 'id');
    }
}
