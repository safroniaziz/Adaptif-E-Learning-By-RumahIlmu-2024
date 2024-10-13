<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Materi extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    /**
     * Get the topikPembahasanKelas that owns the Materi
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function topikPembahasanKelas(): BelongsTo
    {
        return $this->belongsTo(TopikPembahasanKelas::class, 'topik_pembahasan_id', 'id');
    }

    /**
     * Get all of the tugasKelompoks for the Materi
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tugasKelompoks(): HasMany
    {
        return $this->hasMany(TugasKelompokMateri::class, 'materi_id', 'id');
    }

    public function tugasIndividus(): HasMany
    {
        return $this->hasMany(TugasIndividuMateri::class, 'materi_id', 'id');
    }

    public function kuis(): HasMany
    {
        return $this->hasMany(KuisMateri::class, 'materi_id', 'id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'kelas_mahasiswas')
                    ->withPivot('critical_status', 'sumber_materi')
                    ->withTimestamps()
                    ->using(KelasMahasiswaDetail::class); // menggunakan custom pivot model
    }

    /**
     * Get all of the comments for the Materi
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class, 'foreign_key', 'local_key');
    }
}
