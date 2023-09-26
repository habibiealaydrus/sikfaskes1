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


        Paginator::useBootstrapFive();
        // Paginator::useBootstrapFour();

        return view(
            'user/index',
            [
                'user' => $user,
                'role' => $role,
                'pengguna' => $pengguna

            ]
        );
    }
    function rolelist()
    {
        $Nama_role = Role::paginate(6);

        //identitas akun
        $user = Auth::user()->name;
        $role = Auth::user()->role_id;

        Paginator::useBootstrapFive();

        return view(
            'user/rolelist',
            [
                'user' => $user,
                'role' => $role,
                'Nama_role' => $Nama_role
            ]
        );
    }
    function adduser()
    {
        return view('user/userlist');
    }
}
