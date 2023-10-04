<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicalrecords', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_rekam_medik');
            $table->string('poli_kunjungan');
            $table->string('anamnase');
            $table->string('pemeriksaan_fisik');
            $table->string('diagnosa');
            $table->string('tindakan');
            $table->string('resep');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medicalrecords');
    }
};
