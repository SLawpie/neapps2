<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedicalReports\MRController;
use App\Http\Controllers\UserController;

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


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::prefix('medical-report')->name('medical-reports.')->group(function(){
    Route::get('/', [MRController::class, 'index'])->name('index');
    //
    // alternative way
    //
    // Route::get('/medical_reports', 'App\Http\Controllers\MedicalReports\MRController@index')->name('index');
    //
    Route::post('/', [MRController::class, 'importFile'])->name('import-file');
    Route::get('/{sheets}', [MRController::class, 'readExamsTypes'])->name('read-exams-types');
    Route::get('/report/{report}', [MRController::class, 'showReport'])->name('show-report');
});
// })->middleware(['auth']);

Route::prefix('user')->name('user.')->group(function(){
    Route::get('/{id}', [UserController::class, 'show'])->name('show');
    Route::post('/edit/{id}', [UserController::class, 'update'])->name('update');
    Route::get('/edit/{id}', [UserController::class, 'edit'])->name('edit');
    Route::get('/cp/{id}', [UserController::class, 'changePasswordForm'])->name('change-password-form');
    Route::post('/cp/{id}', [UserController::class, 'changePassword'])->name('change-password');
});

// Route::group(['middleware' => ['auth']], function(){
//     Route::resource('roles', 'RoleController');
//     Route::resource('users', 'UserController');
// });

require __DIR__.'/auth.php';
