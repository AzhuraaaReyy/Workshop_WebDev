<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'nama',
        'deskripsi',
        'tanggal',
        'lokasi',
        'gambar',
    ];

    protected $casts = [
        'tanggal'
    ];

    public function Kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
}
