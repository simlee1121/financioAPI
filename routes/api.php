<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InterviewApplicantsController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('getall', [InterviewApplicantsController::class, 'listall']);
Route::get('get-applicant', [InterviewApplicantsController::class, 'getById']);
Route::post('add-applicant', [InterviewApplicantsController::class, 'adding']);
Route::put('edit-applicant', [InterviewApplicantsController::class, 'edit']);
Route::delete('delete-applicant', [InterviewApplicantsController::class, 'delete']);
