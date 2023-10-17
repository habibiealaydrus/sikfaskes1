<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Medicalrecord extends Model
{
    use HasFactory;


    public function patient_name()
    {
        return $this->belongsTo(Patient_data::class, 'nomor_rekam_medik', 'nomor_rekam_medis');
    }

    protected $fillable = [
        'nomor_rekam_medik',
        'poli_kunjungan',
        'anamnase',
        'pemeriksaan_fisik',
        'diagnosa',
        'tindakan',
        'resep'
    ];
}
