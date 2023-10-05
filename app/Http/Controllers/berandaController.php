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
        $dataHariIni = DB::table('medicalrecords')->where('created_at', 'like', '%' . $today . '%')->paginate(6);

        Paginator::useBootstrapFive();
        ~$totalkunjungan = Medicalrecord::select('poli_kunjungan', DB::raw("COUNT(id) as count"))
            ->groupBy('poli_kunjungan')
            ->get();
        //dd($totalkunjungan);
        $dataArray = array($totalkunjungan);
        return view(
            'beranda',
            compact('user', 'role', 'startMonth', 'dataHariIni', 'totalkunjungan')
        );
    }

    function logout()
    {
        Auth::logout();
        return redirect('');
    }
}
