<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicalrecord extends Model
{
    use HasFactory;
    protected $fillable = [
        'nomor_rekam_medik',
        'poli_kunjungan'
    ];
}
