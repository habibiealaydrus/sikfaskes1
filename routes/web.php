<?php

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\berandaController;
use App\Http\Controllers\administratorController;
use App\Http\Controllers\pendaftaranController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware(['guest'])->group(function () {
    Route::get('/', [loginController::class, 'index'])->name('login');
    Route::post('/login', [loginController::class, 'login']);
});

Route::middleware(['auth'])->group(function () {
    //beranda start
    Route::get('/beranda', [berandaController::class, 'index'])->name('beranda');
    Route::get('/home', [berandaController::class, 'index']);
    Route::get('/logout', [berandaController::class, 'logout']);
    //beranda end

    //administrator start
    Route::get('/user', [administratorController::class, 'index']);
    Route::get('/rolelist', [administratorController::class, 'rolelist']);
    Route::get('/adduser', [administratorController::class, 'adduser']);
    Route::post('/adduserbaru', [administratorController::class, 'userbaru']);
    Route::get('/edituser/{id}', [administratorController::class, 'edituser']);
    route::put('/simpanedituser/{id}', [administratorController::class, 'updateuser']);
    Route::get('/confirmdelete/{id}', [administratorController::class, 'confirmdelete']);
    Route::delete('/destroy/{id}', [administratorController::class, 'destroy']);
    //administrator end

    //pendaftaran start
    Route::get('/pendaftaranberobat', [pendaftaranController::class, 'index']);
    Route::get('/daftarpasienbaru', [pendaftaranController::class, 'daftarpasienbaru']);
    Route::post('/simpandatapasienbaru', [pendaftaranController::class, 'simpandatapasienbaru']);
    Route::get('/carimedrec', [pendaftaranController::class, 'carimedrec']);
    Route::get('/editpatientdata/{id}', [pendaftaranController::class, 'editpatientdata']);
    Route::put('/updatedatapasien/{id}', [pendaftaranController::class, 'upatedatapatient']);
    Route::get('/confirmdeletepatient/{id}', [pendaftaranController::class, 'confirmdeletepatient']);
    route::delete('destroypatientdata/{id}', [pendaftaranController::class, 'destroypatientdata']);
    Route::get('//daftarkunjunganpoli/{id}', [pendaftaranController::class, 'daftarpoli']);
    Route::get('/cetakantrianpolidokter/{id}/{nama_unit}', [pendaftaranController::class, 'cetakantrianpolidokter']);
    Route::post('/tambahpasienpoli', [pendaftaranController::class, 'tambahpasienpoli']);
    //pendafataran end
});
