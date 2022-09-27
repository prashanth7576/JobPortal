<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AddjobController;
use App\Http\Controllers\FullCalenderController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\DeptController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmpController;
use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\DisplayController;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\AddController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Input;
use App\Models\User;
use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\DropdownController;

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use RealRashid\SweetAlert\Facades\Alert;


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





Route::resource('/', DashboardController::class)->middleware(['auth']);
 

Route::get('/display', function () {
    return view('display');
})->name('display');



Route::get('/display', [App\Http\Controllers\DisplayController::class,'index']);

Route::get('calender', [FullCalenderController::class, 'index']);

Route::post('calender/action', [FullCalenderController::class, 'action']);



Route::get('/candidates', [App\Http\Controllers\CandidatesController::class,'index']);


Route::get('index', function () {
    return view('index');
})->name('index');

Route::get('index', [App\Http\Controllers\IndexController::class,'index']);



Route::get('edit', function () {
    return view('edit');
})->name('edit');

Route::get('edit', [App\Http\Controllers\EditController::class,'index']);

Route::get('apply', function () {
    return view('apply');
})->name('apply');

Route::get('jobs.create',[StudentController::class, 'index'])->name('add');
Route::post('/save',[StudentController::class, 'save'])->name('save');



Route::resource('/jobs', JobController::class);


Route::get('display', [App\Http\Controllers\SearchController::class,'index']);

Route::resource('/employe', EmployeController::class);

Route::get('empdata', [App\Http\Controllers\EmpdataController::class,'index']);

Route::get('settings', function () {
    return view('settings');
})->name('settings');

Route::get('applicant', [ApplicantController::class,'itemView'])->name('filter');
Route::post('/update-items', [ApplicantController::class, 'updateItems'])->name('update.items');


Route::resource('/depts', DeptController::class);

Route::resource('/emps', EmpController::class);


Route::post('/logout', [LogoutController::class, 'store']) ->name('logout');


Route::get('/login', [LoginController::class, 'index']) ->name('login');
Route::post('/login', [LoginController::class, 'store']);


Route::get('/register', [RegisterController::class, 'index']) ->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::resource('/project', AddController::class);

Route::get('/change-password', [PasswordController::class, 'changepassword']) ->name('change-password');
Route::post('/change-password', [PasswordController::class, 'updatepassword']) ->name('update-password');




  
Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');



Route::get('employee',[EmployeeController::class, 'index']);
Route::post('employee',[EmployeeController::class, 'store'])->name('addimage');
Route::get('employeepage',[EmployeeController::class, 'display']);

Route::get('/home',[HomeController::class, 'index']);
Route::post('/home',[HomeController::class, 'upload']);


Route::get('/add-image',[ImageUploadController::class,'addImage'])->name('images.add');

//For storing an image
Route::post('/store-image',[ImageUploadController::class,'storeImage'])
->name('images.store');

//For showing an image
Route::get('/add-image',[ImageUploadController::class,'viewImage'])->name('images.view');
require __DIR__.'/auth.php';
