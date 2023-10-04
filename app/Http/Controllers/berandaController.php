<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Medicalrecord;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
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
        $dataPendaftaranHariIni = DB::table('medicalrecords')->where('created_at', 'like', '%' . $today . '%')->paginate(6);

        return view(
            'beranda',
            [
                'user' => $user,
                'role' => $role,
                'startMonth' => $startMonth,
                'dataHariIni' => $dataPendaftaranHariIni
            ]
        );
    }

    function logout()
    {
        Auth::logout();
        return redirect('');
    }
}
