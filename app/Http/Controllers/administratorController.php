<?php

namespace App\Http\Controllers;

use App\Models\Role;
use app\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class administratorController extends Controller
{
    public function index()
    {
        //identitas akun
        $user = Auth::user()->name;
        $role = Auth::user()->role_id;

        //data users
        $pengguna = User::all();
        $Nama_role = Role::all();

        return view(
            'user/index',
            [
                'user' => $user,
                'role' => $role,
                'pengguna' => $pengguna,
                'Nama_role' => $Nama_role
            ]
        );
    }
}
