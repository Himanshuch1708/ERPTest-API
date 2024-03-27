<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('test/api/api-data', [ApiController::class, 'index']);// testing using PO
Route::get('test/api/attendance-request', [ApiController::class, 'getAttendanceRequests']);
Route::get('test/api/footwear-overtime', [ApiController::class, 'getFootwearOvertime']);
Route::get('test/api/footwear-attendance-sheet', [ApiController::class, 'getFootwearAttendanceSheet']);
Route::get('test/api/leave-application', [ApiController::class, 'getLeaveApplication']);
Route::get('test/api/leave-allocation', [ApiController::class, 'getLeaveAllocation']);
