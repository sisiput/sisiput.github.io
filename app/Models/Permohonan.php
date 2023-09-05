<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permohonan extends Model
{
    use HasFactory;

    protected $table = "permohonan";

    protected $fillable = [
        'no_pendaftaran',
        'nama',
        'hp',
        'jenis_perkara',
        'no_perkara',
        'nama_berperkara',
        'tipe_peliput',
        'jurnalis_media_cetak',
        'lembaga',
        'sudah_cetak',
    ];
}