<?php

use App\Http\Controllers\ExamController;
use App\Http\Controllers\DeanController;
use App\Http\Controllers\DrController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\LecturerController;
use App\Http\Controllers\HodController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use Illuminate\Support\Facades\Auth;



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
    return redirect(route('login'));
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    Route::get('/dashboard', function () {
        if(Auth::user()->role == 1){
            return redirect()->route('dr.index');
        }elseif(Auth::user()->role == 2){
            return redirect()->route('dean.index');
        }elseif(Auth::user()->role == 3){
            return redirect()->route('hod.index');
        }elseif(Auth::user()->role == 4){
            return redirect()->route('lecture.index');
        }elseif(Auth::user()->role == 5){
            return redirect()->route('student.index');
        }else{
            return redirect()->route('/login');
        }
    })->name('dashboard');

    // if(Auth::user()->role == '1'){
    //     Route::get('/stdashboard', function () {
    //         return view('stdashboard');
    //     })->name('stdashboard');
    // }
    // else{
    //     return route('login');
    // }
});


Route::resource('student', StudentsController::class);
Route::resource('exam', ExamController::class);
Route::resource('lecture', LecturerController::class);
Route::resource('hod', HodController::class);
Route::resource('dean', DeanController::class);
Route::resource('dr', DrController::class);

Route::get('/stdashboard', [StudentsController::class, 'index'])->name('stdashboard');
Route::get('/examentryform', [StudentsController::class, 'create'])->name('examentryform');
Route::get('/lecdashboard', [LecturerController::class, 'index'])->name('lecdashboard');
Route::get('/lectureconformation', [LecturerController::class, 'create'])->name('lectureconformation');
Route::get('/hoddashboard', [HodController::class, 'index'])->name('hoddashboard');
Route::get('/hodrecommendation', [HodController::class, 'create'])->name('hodrecommendation');
Route::get('/deandashboard', [DeanController::class, 'index'])->name('deandashboard');
Route::get('/deanrecommendation', [DeanController::class, 'create'])->name('deanrecommendation');
Route::get('/drdashboard', [DrController::class, 'index'])->name('drdashboard');
Route::get('/drconformation', [DrController::class, 'create'])->name('drconformation');













