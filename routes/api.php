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

Route::resource('users', 'UsersController');
Route::resource('students', 'StudentsController');
Route::resource('cohorts', 'CohortsController');
Route::resource('educations', 'EducationsController');
Route::resource('examcandidates', 'ExamCandidatesController');

// Route::get('examlines', 'ExamLinesController@index');
Route::resource('examlines', 'ExamLinesController', ['only' => [
    'index', 'update'
]]);
Route::post('examlines/update/{candidate}', 'ExamLinesController@update');
// Route::get('examlines/show', 'ExamLinesController@show');

Route::resource('exams', 'ExamsController');
Route::resource('remarks', 'RemarksController');
