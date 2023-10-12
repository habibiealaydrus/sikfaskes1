<?php

namespace App\Http\Controllers;

use App\Models\Maritalstatus;
use App\Models\Medicalrecord;
use App\Models\Patient_data;
use App\Models\Religion;
use App\Models\Unit;
use App\Models\Workstatus;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class pendaftaranController extends Controller
{

    public function index()
    {
        $user = Auth::user()->name;
        $role = Auth::user()->role_id;

        $dataPasien = Patient_data::paginate(6);

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
        $dataPasien = DB::table('patient_datas')->where('nik', 'like', '%' . $cari . '%')->paginate(6);

        Paginator::useBootstrapFive();

        return view('pendaftaran/index', [
            'user' => $user,
            'role' => $role,
            'dataPasien' =>  $dataPasien
        ]);
    }
    public function editpatientdata(Request $request, $id)
    {
        //dd($id);
        //user dan role
        $user = Auth::user()->name;
        $role = Auth::user()->role_id;

        $datapatientedit = Patient_data::findOrFail($id);
        $optionReligion = Religion::all();
        $optionMaritalstatus = Maritalstatus::all();
        $pekerjaan = Workstatus::all();
        //dd($optionWorkStatus->all());

        return view(
            '/pendaftaran/editdatapasien',
            [
                'user' => $user,
                'role' => $role,
                'datapatientedit' => $datapatientedit,
                'optionReligion' => $optionReligion,
                'optionMaritalstatus' => $optionMaritalstatus,
                'pekerjaan' => $pekerjaan,

            ]
        );
    }
    public function upatedatapatient(Request $request, $id)
    {
        $data = Patient_data::findOrFail($id);
        $data->update($request->all());
        return redirect('/pendaftaranberobat');
    }
    public function confirmdeletepatient($id)
    {

        //identitas akun
        $user = Auth::user()->name;
        $role = Auth::user()->role_id;

        $data = Patient_data::findOrFail($id);
        return view('/pendaftaran/confirmdelete', [
            'data' => $data,
            'user' => $user,
            'role' => $role
        ]);
    }
    public function destroypatientdata($id)
    {
        $deletedData = Patient_data::findOrfail($id);
        $deletedData->delete();
        if ($deletedData) {
            Session::flash('status', 'success');
            Session::flash('button', 'danger');
            Session::flash('massage', 'data dasar pasien berhasil dihapus');
        }

        return redirect('/pendaftaranberobat');
    }

    public function daftarpoli($id)
    {
        //identitas akun
        $user = Auth::user()->name;
        $role = Auth::user()->role_id;

        $idpatient = Patient_data::findOrfail($id);
        $poli = Unit::where('jenis_unit', 'like', 'poli')->get();
        //dd($role);
        return view('/pendaftaran/daftarpoli', [
            'user' => $user,
            'role' => $role,
            'idpatient' => $idpatient,
            'poli' => $poli
        ]);
    }

    public function cetakantrianpolidokter(Request $request, $id)
    {
        //identitas akun
        $user = Auth::user()->name;
        $role = Auth::user()->role_id;
        $hariIni = date('Y-m-d');
        //mengambil nama
        $datapasien = Patient_data::findOrFail($id);
        $poli = $request->poli_kunjungan;
        //mengambil urutan
        $jumlahPasienHariIni = Medicalrecord::where('created_at', 'like', '%' . $hariIni . '%')->count();
        //mengambil harga
        // $harga = Unit::where('nama_unit', '=', $poli_kunjungan)->get();
        //dd($datapasien);
        //dd($harga);
        //dd($jumlahPasienHariIni);
        $antrian = $jumlahPasienHariIni + 1;


        return view('pendaftaran/antrianpoli', [
            'user' => $user,
            'role' => $role,
            'datapasien' => $datapasien,
            'tanggaldaftar' => $hariIni,
            'antrian' => $antrian,
            'poli' => $poli

        ]);
    }
    public function tambahpasienpoli(Request $request)
    {
        //identitas akun
        $user = Auth::user()->name;
        $role = Auth::user()->role_id;


        $request = Medicalrecord::create(
            [
                'nomor_rekam_medik' => $request['nomor_rekam_medik'],
                'poli_kunjungan' => $request['poli_kunjungan']
            ]
        );

        if ($request) {
            Session::flash('status', 'success');
            Session::flash('button', 'success');
            Session::flash('massage', 'Pasien berhasil didaftarkan ');
        }
        //dd($datarekammedis->all());
        return redirect('/pendaftaranberobat');
    }
    public function pendaftaranpenunjang()
    {
        $user = Auth::user()->name;
        $role = Auth::user()->role_id;

        $dataPasien = Patient_data::paginate(6);

        Paginator::useBootstrapFive();
        return view(
            'pendaftaran/listmedicalrecord2',
            [
                'user' => $user,
                'role' => $role,
                'dataPasien' => $dataPasien
            ]
        );
    }
    public function tambahpasienpenunjang($id)
    {
        //identitas akun
        $user = Auth::user()->name;
        $role = Auth::user()->role_id;

        $idpatient = Patient_data::findOrfail($id);
        $unit = Unit::where('jenis_unit', 'like', 'penunjang')->get();
        //dd($role);
        return view(
            'pendaftaran/daftarpenunjang',
            [
                'user' => $user,
                'role' => $role,
                'idpatient' => $idpatient,
                'unit' => $unit
            ]
        );
    }
    public function simpanpasienpenunjang(Request $request)
    {
        //identitas akun
        $user = Auth::user()->name;
        $role = Auth::user()->role_id;


        $request = Medicalrecord::create(
            [
                'nomor_rekam_medik' => $request['nomor_rekam_medik'],
                'poli_kunjungan' => $request['poli_kunjungan']
            ]
        );

        if ($request) {
            Session::flash('status', 'success');
            Session::flash('button', 'success');
            Session::flash('massage', 'Pasien Penunjang berhasil didaftarkan ');
        }
        //dd($datarekammedis->all());
        return redirect('/pendaftaranpenunjang');
    }
}
