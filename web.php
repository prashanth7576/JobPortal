<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AddjobController;
use App\Http\Controllers\FullCalenderController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\DeptController;
use App\Http\Controllers\EmpController;
use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\DisplayController;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use App\Http\Controllers\SearchController;


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




 Route::get('/', [App\Http\Controllers\DashboardController::class,'index'])->middleware(['auth']);
 

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


Route::get('applicant', [ApplicantController::class,'itemView']);
Route::post('/update-items', [ApplicantController::class, 'updateItems'])->name('update.items');

Route::resource('/depts', DeptController::class);

Route::resource('/emps', EmpController::class);


require __DIR__.'/auth.php';
