<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class UtsSesi extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    /**
     * Get the uts that owns the UtsSesi
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function uts(): BelongsTo
    {
        return $this->belongsTo(Uts::class, 'uts_id', 'id');
    }


}
