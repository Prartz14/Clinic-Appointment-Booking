<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

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


Route::get('home', [WebController::class, 'home']);
Route::get('history', [WebController::class, 'history']);
Route::get('about', [WebController::class, 'about']);
Route::get('doctors', [WebController::class, 'doctors']);
Route::get('register', [WebController::class, 'register']);
Route::get('booking', [WebController::class, 'booking']);
Route::get('patient_logout', [WebController::class, 'patient_logout']);
Route::get('myacc', [WebController::class, 'myacc']);
Route::get('login', [WebController::class, 'login']);
Route::get('contactus', [WebController::class, 'contactus']);
Route::get('delBooking', [WebController::class, 'delBooking']);
//Route::get('invoice', [WebController::class, 'invoice']);
Route::post('plogin', [WebController::class, 'plogin']);
Route::post('profileinsert', [WebController::class, 'pinsert']);
Route::post('registerinsert', [WebController::class, 'rinsert']);
Route::post('bookinginsert', [WebController::class, 'binsert']);














/*-------------------------------------------Admin-----------------------------------------------*/
Route::get('admin', [AdminController::class, 'admin']);
Route::get('dashboard', [AdminController::class, 'dashboard']);

Route::get('speciality', [AdminController::class, 'speciality']);
Route::get('bookingsb', [AdminController::class, 'bookingsb']);
Route::get('doctorsb', [AdminController::class, 'doctorsb']);
Route::get('invoice', [AdminController::class, 'invoice']);
Route::get('delDoctor', [AdminController::class, 'ddoctor']);
Route::get('editDoctor', [AdminController::class, 'edoctor']);
Route::get('delSpeciality', [AdminController::class, 'dspeciality']);
Route::get('editSpeciality', [AdminController::class, 'especiality']);
Route::get('password', [AdminController::class, 'password']);
Route::get('logout', [AdminController::class, 'logout']);
Route::post('adminlogin', [AdminController::class, 'adminlogin']);
Route::post('specialityinsert', [AdminController::class, 'sinsert']);
Route::post('doctorinsert', [AdminController::class, 'dinsert']);
Route::post('passwordinsert', [AdminController::class, 'pinsert']);

