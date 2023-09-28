<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient_data extends Model
{
    use HasFactory;
    protected $fillable = [
        'nomor_rekam_medis',
        'nik',
        'nama',
        'tempat_lahir',
        'tanggal',
        'gender',
        'alamat',
        'agama',
        'status_pernikahan',
        'pekerjaan'
    ];
}
