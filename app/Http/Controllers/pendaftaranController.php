<?php

namespace App\Http\Controllers;

use App\Models\Patient_data;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Session;


class pendaftaranController extends Controller
{

    public function index()
    {
        $user = Auth::user()->name;
        $role = Auth::user()->role_id;

        $dataPasien = Patient_data::paginate(6)->fragment('patient_datas');

        Paginator::useBootstrapFive();

        return view('pendaftaran/index', [
            'user' => $user,
            'role' => $role,
            'dataPasien' => $dataPasien
        ]);
    }

    public function daftarpasienbaru()
    {
        $user = Auth::user()->name;
        $role = Auth::user()->role_id;

        $n = 10;
        function getRandomString($n)
        {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $randomString = '';

            for ($i = 0; $i < $n; $i++) {
                $index = rand(0, strlen($characters) - 1);
                $randomString .= $characters[$index];
            }

            return $randomString;
        }
        $medrec = getRandomString($n);

        return view(
            '/pendaftaran/formdatapasienbaru',
            [
                'user' => $user,
                'role' => $role,
                'medrec' => $medrec
            ]
        );
    }
    public function simpandatapasienbaru(Request $request)
    {
        //dd($request->all());

        //proses cek NIK
        $request->validate([
            'nama' => 'required',
            'nik' => 'required|unique:patient_datas|min:16',
            'tanggal' => 'required'

        ], [
            'nama.required' => 'Nama wajib diisi',
            'nik.required' => 'NIK wajib diisi',
            'nik.unique' => 'NIK sudah digunakan',
            'nik.min' => 'NIK minimum 16 digit',
            'tanggal.required' => 'Tanggal Lahir Wajib di isi'
        ]);

        $request = Patient_data::create([
            'nomor_rekam_medis' => $request['nomor_rekam_medis'],
            'nik' => $request['nik'],
            'nama' => $request['nama'],
            'tempat_lahir' => $request['tempat_lahir'],
            'tanggal' => $request['tanggal'],
            'gender' => $request['gender'],
            'alamat' => $request['alamat'],
            'agama' => $request['agama'],
            'status_pernikahan' => $request['status_pernikahan'],
            'pekerjaan' => $request['pekerjaan']

        ]);

        // dd($request->all());
        if ($request) {
            Session::flash('status', 'success');
            Session::flash('button', 'success');
            Session::flash('massage', 'data dasar pasien berhasil bertambah');
        }

        $dataPasien = Patient_data::all();
        return redirect('/pendaftaranberobat');
    }
    public function carimedrec(Request $request)
    {
        //user dan role
        $user = Auth::user()->name;
        $role = Auth::user()->role_id;

        // dd($request->all());
        $cari = $request->cari;
        $dataPasien = DB::table('patient_datas')->where('nik', 'like', '%' . $cari . '%')->paginate(5);

        Paginator::useBootstrapFive();

        return view('pendaftaran/index', [
            'user' => $user,
            'role' => $role,
            'dataPasien' =>  $dataPasien
        ]);
    }
}
