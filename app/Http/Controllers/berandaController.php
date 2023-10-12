<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Medicalrecord;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;

class berandaController extends Controller
{
    public function index()
    {
        $user = Auth::user()->name;
        $role = Auth::user()->role_id;

        $startMonth = Carbon::now()->startOfMonth()->format('l, d-m-Y');
        //pendaftaran table
        $today = date('Y-m-d');
        //untuk table kunjungan pasien
        $dataHariIni = DB::table('medicalrecords')->where('created_at', 'like', '%' . $today . '%')->paginate(6);
        Paginator::useBootstrapFive();
        //untuk info grafis pie chart
        $totalkunjungan = Medicalrecord::select('poli_kunjungan', DB::raw("COUNT(id) as count"))
            ->groupBy('poli_kunjungan')
            ->get();
        $dataArray = array($totalkunjungan);
        //untuk infografis chart column
        $totalkunjunganharian = Medicalrecord::select('created_at', DB::raw("COUNT(id) as count"))
            ->groupBy(DB::raw('Date(created_at)'))
            ->get();
        //dd($totalkunjunganharian);
        //untuk infoboxes
        $dataPasienHariIni = Medicalrecord::where('created_at', 'like', '%' . $today . '%')->count();
        //dd($dataPasienHariIni);
        $dataArray = array($totalkunjungan);
        return view(
            'beranda',
            compact('user', 'role', 'startMonth', 'dataHariIni', 'totalkunjungan', 'totalkunjunganharian', 'dataPasienHariIni')
        );
    }

    function logout()
    {
        Auth::logout();
        return redirect('');
    }
}
