<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicalrecord;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;


class dokterController extends Controller
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
        //dd($antrianpolidokter[0]['nomor_rekam_medik']);
        Paginator::useBootstrapFive();
        //dd($antrianpolidokter);
        return view(
            'dokter/index',
            [
                'user' => $user,
                'role' => $role,
                'antrianpolidokter' => $antrianpolidokter,
                'antriantindakan' => $antriantindakan
            ]
        );
    }
    public function pemeriksaandokter($id)
    {
        $user = Auth::user()->name;
        $role = Auth::user()->role_id;
        $medrec = DB::table('medicalrecords')->where('id', $id)->first();
        $nomor_rekam_medik = $medrec->nomor_rekam_medik;
        //dd($medrec);
        //datadasarpasien
        $datadasarpasien = DB::table('patient_datas')->where('nomor_rekam_medis', $nomor_rekam_medik)->first();
        $riwayatpasien = Medicalrecord::where('nomor_rekam_medik', $nomor_rekam_medik)->get();
        //dd($datadasarpasien);
        //dd($id);
        return view(
            'dokter/pemeriksaandokter',
            [
                'user' => $user,
                'role' => $role,
                'datadasarpasien' => $datadasarpasien,
                'id' => $id,
                'medrec' => $riwayatpasien
            ]
        );
    }
}
