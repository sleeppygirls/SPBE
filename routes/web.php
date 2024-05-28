<?php

use App\Models\Jawaban;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
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
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;


use App\Http\Controllers\Admin\IndikatorController as IndikatorAdminController;

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

Route::get('/', [AuthController::class, 'dashboard'])->middleware('is.auth');

// Route::get('/', function () {
//     return view('dashboard');
// });

// Route::get('/penja', function () {
//     return view('penjelasanjawaban');
// });

Route::get('login', [AuthController::class, 'showlogin'])->middleware('is.not.auth');
Route::post('login', [AuthController::class, 'actionLogin'])->middleware('is.not.auth');

Route::middleware(['is.auth'])->group(function() {

    Route::get('logout', [AuthController::class, 'actionLogout']);

    Route::resource('penilaian', PenilaianController::class);
    Route::resource('task', TaskController::class);
    Route::resource('indikator', IndikatorController::class);
    Route::resource('jawaban', JawabanController::class);
    Route::resource('bantuan', BantuanController::class);
    Route::resource('profil', ProfilController::class);
    Route::resource('bagians', BagianController::class);
    Route::resource('users', UserController::class);
    Route::resource('skors', SkorController::class);

    // custom uri
    // Route::get('indikator/{indikator}/{username}', [IndikatorController::class, 'show']);
    Route::post('indikator/task', [IndikatorController::class, 'task'])->name('indikator.task');
    // Route::get('indikator/task/{id_task}/{username}', [IndikatorController::class, 'test']);
    // Route::get('indikator/task/{task}/{user}', [IndikatorController::class, 'user']);
    // Route::post('jawaban', [JawabanController::class,'store']);
});