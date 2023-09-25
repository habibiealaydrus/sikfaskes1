<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class berandaController extends Controller
{
    public function index()
    {
        $user = Auth::user()->name;
        $role = Auth::user()->role_id;

        $startMonth = Carbon::now()->startOfMonth()->format('l, d-m-Y');
        return view(
            'beranda',
            [
                'user' => $user,
                'role' => $role,
                'startMonth' => $startMonth,
            ]
        );
    }

    function logout()
    {
        Auth::logout();
        return redirect('');
    }
}
