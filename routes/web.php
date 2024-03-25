<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\TestController;

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

// routes that are open to all
Route::get('/', function () {
    return view('login');
});

// peform login or authentication for the user
Route::post('/login', [AuthenticationController::class,'login']);


// web routes that are exclusive to the administrators
Route::prefix('admin')->middleware('adminroutes')->group(function () {
    // dashboard for the admin page
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });

    // manage patient for the admin page
    Route::get('/managepatient', function () {
        return redirect('admin.manage');
    });

});


// web routes that are exclusive to the staff page
Route::prefix('staff')->middleware('staffroutes')->group(function () {
    // manage patient fot the clerk page
    Route::get('/managepatient', function () {
        return view('clerk.manage');
    });
});







