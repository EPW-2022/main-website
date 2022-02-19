<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ApplicantController;
use App\Http\Controllers\Admin\ShortlinkController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AdminController;

use App\Http\Controllers\PagesController;

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

// FOR MAIN WEBSITE
// Route::get('/', [PagesController::class, 'comingsoon']);
Route::get('/', [PagesController::class, 'index']);
Route::get('/about', function () {
  return view('main.about', ['title' => 'About TF']);
});

Route::get('/vibrasi-dan-akustik', function () {
  return view('main.laboratories.vibrastik', ['title' => 'Vibrastik']);
});
Route::get('/rekayasa-fotonika', function () {
  return view('main.laboratories.fotonika', ['title' => 'Fotonika']);
});
Route::get('/pengukuran-keandalan-risiko-dan-keselamatan', function () {
  return view('main.laboratories.lpkrk', ['title' => 'LPKRK']);
});
Route::get('/instrumentasi-kontrol-dan-optimisasi', function () {
  return view('main.laboratories.ico', ['title' => 'ICO']);
});
Route::get('/material-fungsional-maju', function () {
  return view('main.laboratories.lmfm', ['title' => 'LMFM']);
});
Route::get('/sistem-tertanam-dan-siber-fisik', function () {
  return view('main.laboratories.ecs', ['title' => 'ECS']);
});
Route::get('/rekayasa-energi-dan-pengondisian-lingkungan', function () {
  return view('main.laboratories.energi', ['title' => 'Energi']);
});

Route::get('/epc', function () {
  return view('main.events.epc', [
    'title' => 'Engineering Physics Challenge'
  ]);
});
Route::get('/snow', function () {
  return view('main.events.snow', [
    'title' => 'Smart Innovation of Writing'
  ]);
});
Route::get('/big-event', function () {
  return view('main.events.big-event', [
    'title' => 'BIG EVENT'
  ]);
});
Route::get('/login', function () {
  return view('main.login', [
    'title' => 'Login'
  ]);
});

// EMPTY STATES
Route::get('/coming-soon', function () {
  return view('errors.comingsoon', [
    'title' => 'Coming Soon'
  ]);
});

// FOR OPEN RECRUITMENT
Route::post('/applicantsubmit', [ApplicantController::class, 'store']);
Route::get('/InterviewAnnouncement', [ApplicantController::class, 'interviewAnnouncement']);
Route::post('/InterviewAnnouncement', [ApplicantController::class, 'interviewSchedule']);
Route::get('/StaffAnnouncement', [ApplicantController::class, 'staffAnnouncement']);
Route::post('/StaffAnnouncement', [ApplicantController::class, 'welcomeparty']);

// FOR AUTHENTICATION
Route::get('/admin-login', [AdminController::class, 'login'])->middleware('guest')->name('login');
Route::post('/login', [AdminController::class, 'authenticate']);
Route::post('/logout', [AdminController::class, 'logout']);

// FOR ADMIN ACCESS
Route::prefix('admin')->middleware(['auth', 'checkRole:Dev,Admin'])->group(function () {
  Route::resource('applicant', ApplicantController::class);
  Route::get('/', [AdminController::class, 'dashboard']);
  Route::resource('user', UserController::class);
  Route::put('/changepass', [UserController::class, 'changepass']);
  Route::get('/priority', [ApplicantController::class, 'priority']);
  // Interview Schedule
  Route::get('/interview', [AdminController::class, 'interview']);
  Route::patch('/acceptance/{applicant:nrp}', [AdminController::class, 'acceptance']);

  Route::resource('shortlink', ShortlinkController::class);
});

// FOR SHORT LINKS
Route::get('/{shortlink:short}', [ShortlinkController::class, 'show']);
Route::fallback(function () {
  return view('errors.404');
});
