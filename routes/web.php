<?php

use App\Models\Jawaban;
use App\Models\LihatIndikator;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\SkorController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BagianController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\BantuanController;
use App\Http\Controllers\JawabanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IndikatorController;
use App\Http\Controllers\PenilaianController;


use App\Http\Controllers\PenjelasanController;
use App\Http\Controllers\LihatIndikatorController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

use App\Http\Controllers\Admin\IndikatorController as IndikatorAdminController;
use App\Http\Controllers\Admin\TaskController as TaskAdminController;
use App\Http\Controllers\Admin\PenjelasanController as PenjelasanAdminController;
use App\Http\Controllers\Admin\SkorController as SkorAspekAdminController;
use App\Http\Controllers\Admin\KeteranganController as KeteranganAdminController;
use App\Http\Controllers\AspekController;
use App\Http\Controllers\DomainController;
use App\Http\Controllers\FileDataController;
use App\Models\Keterangan;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Route::get('/', [AuthController::class, 'dashboard'])->middleware('is.auth');

Route::get('/test', function () {
    return view('test');
});

// Route::get('/penja', function () {
//     return view('penjelasanjawaban');
// });

Route::get('login', [AuthController::class, 'showlogin'])->middleware('is.not.auth');
Route::post('login', [AuthController::class, 'actionLogin'])->middleware('is.not.auth');

Route::middleware(['is.auth'])->group(function() {

    Route::get('logout', [AuthController::class, 'actionLogout']);

    Route::get('/', [AuthController::class, 'dashboard']);
    Route::post('/', [AuthController::class, 'dashboard']);

    Route::resource('penilaian', PenilaianController::class);
    Route::resource('task', TaskController::class);
    Route::get('task/{task}/copy', [TaskController::class, 'copy']);
    Route::resource('domain', DomainController::class);
    Route::resource('aspek', AspekController::class);
    Route::resource('/indikator', IndikatorController::class);
    // Route::resource('lihat', LihatIndikatorController::class);
    Route::resource('jawaban', JawabanController::class);
    Route::resource('bantuan', BantuanController::class);
    Route::resource('profil', ProfilController::class);
    Route::resource('skors', SkorController::class);
    Route::resource('users', UserController::class);
    Route::resource('users/{user}/bagians', BagianController::class);
    Route::resource('task/{task}/{username}/file', FileDataController::class);

    // admin
    Route::resource('/adm/indikator', IndikatorAdminController::class);
    Route::resource('/adm/indikator/{indikator}/penjelasan', PenjelasanAdminController::class);
    // Route::resource('/adm/indikator/{indikator}/keterangan', KeteranganAdminController::class);
    Route::resource('/adm/users/{user}/skor', SkorAspekAdminController::class);

    // custom uri
    Route::get('task/{task}/indikator/{indikator}/{username}', [IndikatorController::class, 'show']);
    Route::post('indikator/task', [IndikatorController::class, 'task'])->name('indikator.task');
    Route::post('lihat/task', [LihatIndikatorController::class, 'task'])->name('lihat.task');
    // Route::get('indikator/task/{id_task}/{username}', [IndikatorController::class, 'test']);
    // Route::get('indikator/task/{task}/{user}', [IndikatorController::class, 'user']);
    // Route::post('jawaban', [JawabanController::class,'store']);
});
