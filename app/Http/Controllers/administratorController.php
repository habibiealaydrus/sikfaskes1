<?php

namespace App\Http\Controllers;

use App\Models\Role;
use app\Models\User;
use App\Models\Level;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
        //identitas akun
        $user = Auth::user()->name;
        $role = Auth::user()->role_id;

        //role list
        $levelList = Level::all();
        $roleUser = Role::all();

        return view(
            'user/adduser',
            [
                'user' => $user,
                'role' => $role,
                'leveList' => $levelList,
                'roleUser' => $roleUser
            ]
        );
    }

    function userbaru(Request $request)
    {
        //identitas akun
        $user = Auth::user()->name;

        //proses tambah data
        $request = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'level' => $request['level'],
            'role_id' => $request['role_id']
        ]);



        return redirect('/user');
    }
}
