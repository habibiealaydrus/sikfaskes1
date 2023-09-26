<?php

namespace App\Http\Controllers;

use App\Models\Role;
use app\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;

class administratorController extends Controller
{
    public function index()
    {
        //identitas akun
        $user = Auth::user()->name;
        $role = Auth::user()->role_id;

        //data users
        $pengguna = User::paginate(6);
        $Nama_role = Role::paginate(4);

        Paginator::useBootstrapFive();
        // Paginator::useBootstrapFour();

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
