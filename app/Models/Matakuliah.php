<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Matakuliah extends Model
{
    protected $table = 'matakuliahs';
    protected $fillable = ['prodi_id', 'dosen_id', 'kode', 'nama', 'sks', 'semester'];

    public function prodi(): BelongsTo
    {
        return $this->belongsTo(Prodi::class);
    }

    public function dosen(): BelongsTo
    {
        return $this->belongsTo(Dosen::class);
    }
}
