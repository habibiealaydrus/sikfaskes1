<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Patient_data;
use Illuminate\Http\Request;
use App\Models\Medicalrecord;
use App\Models\Medicaltreatment;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
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
        //dd($antrianpolidokter[0]['nomor_rekam_medik']);
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

    public function periksaawal($id)
    {
        $user = Auth::user()->name;
        $role = Auth::user()->role_id;
        $medrec = DB::table('medicalrecords')->where('id', $id)->first();
        $nomor_rekam_medik = $medrec->nomor_rekam_medik;
        //dd($medrec);
        //datadasarpasien
        $datadasarpasien = DB::table('patient_datas')->where('nomor_rekam_medis', $nomor_rekam_medik)->first();
        //dd($datadasarpasien);
        //dd($id);
        return view(
            'perawat/periksaawal',
            [
                'user' => $user,
                'role' => $role,
                'datadasarpasien' => $datadasarpasien,
                'id' => $id
            ]
        );
    }
    public function updatepemeriksaanfisik(Request $request, $id)
    {


        $data = Medicalrecord::findOrFail($id);
        $data->update($request->all());
        //dd($data);
        return redirect('/perawat');
    }
    public function tindakanperawat($id)
    {
        $user = Auth::user()->name;
        $role = Auth::user()->role_id;

        $medrec = DB::table('medicalrecords')->where('id', $id)->first();
        $nomor_rekam_medik = $medrec->nomor_rekam_medik;
        //dd($medrec);
        //datadasarpasien
        $datadasarpasien = DB::table('patient_datas')->where('nomor_rekam_medis', $nomor_rekam_medik)->first();
        $listtindakan = Medicaltreatment::all();
        return view(
            'perawat/tindakanperawat',
            [
                'user' => $user,
                'role' => $role,
                'datadasarpasien' =>  $datadasarpasien,
                'id' => $id,
                'listtindakan' => $listtindakan
            ]
        );
    }
    public function simpantindakan(Request $request, $id)
    {
        //dd($request->tindakan);
        $data = Medicalrecord::findOrFail($id);
        $data->update($request->all());
        return redirect('/perawat');
    }
    public function laporanperawat()
    {
        $user = Auth::user()->name;
        $role = Auth::user()->role_id;

        $totalkunjungan = Medicalrecord::select('poli_kunjungan', DB::raw("COUNT(id) as count"))
            ->where('poli_kunjungan', 'like', '%' . 'Poli tindakan' . '%')
            ->orwhere('poli_kunjungan', 'like', '%' . 'Poli Dokter Umum' . '%')
            ->groupBy('poli_kunjungan')
            ->get();

        return view(
            'perawat/laporanperawat',
            [
                'user' => $user,
                'role' => $role,
                'totalkunjungan' => $totalkunjungan

            ]
        );
    }
}
