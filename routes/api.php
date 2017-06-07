<?php


use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Users
Route::resource('users', 'UsersController');

// Students
Route::get('students', 'StudentsController@index');
Route::post('students', 'StudentsController@store');

// Cohorts
Route::resource('cohorts', 'CohortsController');

// Educations
Route::resource('educations', 'EducationsController');

// ExamCandidates
Route::get('examcandidates', 'ExamCandidatesController@index');
Route::put('examcandidates/store/{examcandidate}', 'ExamCandidatesController@store');

// ExamLines
Route::get('examlines', 'ExamLinesController@index');
Route::post('examlines/update/{examline}', 'ExamLinesController@update');

// Exams
Route::resource('exams', 'ExamsController');

// Remarks
Route::resource('remarks', 'RemarksController');
