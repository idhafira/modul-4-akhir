<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswas';
    protected $fillable = ['prodi_id', 'dosen_wali_id', 'nim', 'nama', 'angkatan', 'semester'];

    public function prodi(): BelongsTo
    {
        return $this->belongsTo(Prodi::class);
    }

    public function dosenWali(): BelongsTo
    {
        return $this->belongsTo(Dosen::class, 'dosen_wali_id');
    }
}
