<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable, SoftDeletes;

    public function getProfileCompletionPercentage()
    {
        $fields = [
            'nama_lengkap',
            'username',
            'email',
            'jenis_kelamin',
            'jalur_masuk',
            'rata_ujian',
            'asal_sekolah',
            'asal_provinsi_sma',
            'foto'
        ];

        $filledFields = 0;

        foreach ($fields as $field) {
            if (!empty($this->$field)) {
                $filledFields++;
            }
        }

        return round(($filledFields / count($fields)) * 100);
    }

    public function utsSesis()
    {
        return $this->belongsToMany(UtsSesi::class, 'uts_pesertas', 'mahasiswa_id', 'uts_sesi_id')
                    ->withTimestamps(); // Jika ada timestamps
    }

    public function mengampu(): HasMany
    {
        return $this->hasMany(Kelas::class, 'pengampu_id', 'id');
    }

    public function kelas()
    {
        return $this->belongsToMany(Kelas::class, 'kelas_mahasiswas', 'mahasiswa_id', 'kelas_id')
                    ->using(KelasMahasiswa::class);
    }

    public function materis()
    {
        return $this->belongsToMany(Materi::class, 'kelas_mahasiswas')
                    ->withPivot('id','critical_status', 'sumber_materi')
                    ->withTimestamps()
                    ->using(KelasMahasiswaDetail::class); // menggunakan custom pivot model
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
