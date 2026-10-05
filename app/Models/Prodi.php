<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Prodi extends Model
{
    protected $table = 'prodis';
    protected $fillable = ['jurusan_id', 'kode', 'nama', 'jenjang'];

    public function jurusan(): BelongsTo
    {
        return $this->belongsTo(Jurusan::class);
    }

    public function dosens(): HasMany
    {
        return $this->hasMany(Dosen::class);
    }

    public function mahasiswas(): HasMany
    {
        return $this->hasMany(Mahasiswa::class);
    }

    public function matakuliahs(): HasMany
    {
        return $this->hasMany(Matakuliah::class);
    }
}
