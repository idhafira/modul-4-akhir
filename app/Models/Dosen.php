<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Dosen extends Model
{
    protected $table = 'dosens';
    protected $fillable = ['prodi_id', 'nidn', 'nama', 'email', 'jabatan'];

    public function prodi(): BelongsTo
    {
        return $this->belongsTo(Prodi::class);
    }

    public function matakuliahs(): HasMany
    {
        return $this->hasMany(Matakuliah::class);
    }

    public function mahasiswaWali(): HasMany
    {
        return $this->hasMany(Mahasiswa::class, 'dosen_wali_id');
    }
}
