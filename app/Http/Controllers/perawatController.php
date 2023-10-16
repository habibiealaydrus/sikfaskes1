<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Medicalrecord;
use App\Models\Patient_data;
use Illuminate\Routing\Controller;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;

class perawatController extends Controller
{
    public function index()
    {
        $user = Auth::user()->name;
        $role = Auth::user()->role_id;
        $now = date("Y-m-d");

        //mengambil data antrian Poli Dokter Umum
        $antrianpolidokter = Medicalrecord::where('created_at', 'like', '%' . $now . '%')->where('poli_kunjungan', 'like', '%' . 'Poli Dokter umum' . '%')->paginate(10);
        //mengambil data antrian ruangan tindakan
        $antriantindakan = Medicalrecord::where('created_at', 'like', '%' . $now . '%')->where('poli_kunjungan', 'like', '%' . 'poli tindakan' . '%')->paginate(10);
        Paginator::useBootstrapFive();
        //dd($antrianpolidokter);
        return view(
            'perawat/index',
            [
                'user' => $user,
                'role' => $role,
                'antrianpolidokter' => $antrianpolidokter,
                'antriantindakan' => $antriantindakan
            ]
        );
    }

    public function periksaawal($nomor_rekam_medik)
    {
        $user = Auth::user()->name;
        $role = Auth::user()->role_id;

        //datadasarpasien
        $datadasarpasien = Patient_data::where('nomor_rekam_medis', '=', $nomor_rekam_medik)->get();
        return view(
            'perawat/periksaawal',
            [
                'user' => $user,
                'role' => $role,
                'datadasarpasien' => $datadasarpasien
            ]
        );
    }
}
