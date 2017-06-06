<?php
namespace App\Http\Controllers;

use App\ExamLines;
use App\ExamCandidates;
// use Illuminate\Http\Request;
use Request;
use Illuminate\Support\Facades\DB;

// header('Access-Control-Allow-Origin: *');
// header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
// header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');

class ExamLinesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $examLines =  DB::table('examlines')
            ->join('examcandidates', 'examlines.examcandidate_id', '=', 'examcandidates.id')
            ->join('exams', 'examlines.exam_id', '=', 'exams.id')
            ->join('cohorts', 'examlines.cohort_id', '=', 'cohorts.id')
            ->join('remarks', 'examlines.remark_id', '=', 'remarks.id')

            // Nested joins
            ->join('students', 'examcandidates.student_id', '=', 'students.id')
            ->join('educations', 'examcandidates.crebo_id', '=', 'educations.id')
            ->join('users', 'remarks.user_id', '=', 'users.id')

            ->select('examlines.id', 
                     'examcandidates.id as examcandidates_id', 
                     'students.firstname as firstname',
                     'students.lastname as lastname',
                     'students.studentnumber as studentnumber',
                     'educations.id as crebo_id',
                     'educations.crebo as crebo',
                     'educations.description as education',
                     'exams.type as exams_type', 
                     'exams.description as exams_description', 
                     'cohorts.year as cohort', 
                     'remarks.id as remark_id',
                     'remarks.description as remark',
                     'remarks.created_at as remark_date',
                     'remarks.component as remark_component',
                     'remarks.user_id as remark_user_id',
                     'users.firstname as remark_user_firstname',
                     'users.lastname as remark_user_lastname',
                     'examlines.status as status'
                     )
                ->orderBy('id', 'asc')
            ->get();

        return $examLines;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     //
    // }

    /**
     * Display the specified resource.
     *
     * @param  \App\ExamLines  $examLines
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, ExamLines $examLines)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ExamLines  $examLines
     * @return \Illuminate\Http\Response
     */
    public function edit(ExamLines $examLines)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ExamLines  $examLines
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ExamLines $examLines, ExamCandidates $examCandidates)
    {
        $candidate = $request::all();
        $id = $request::input('id');
        $examcandidates_id = $request::input('examcandidates_id');
        $crebo_id = $request::input('crebo_id');
        $crebo = $request::input('crebo');
        $education = $request::input('education');
        $status = $request::input('status');

        var_dump($candidate);
        echo $id;
        echo $examcandidates_id;
        echo $crebo_id; 
        echo $crebo;
        echo $education;
        echo $status;

        // DB::table('examlines')
        //     ->where('id', '=', $id)
        //     // ->update(array('crebo_id' => $crebo_id))            
        //     // ->update(array('crebo' => $crebo))
        //     // ->update(array('education' => $education))
        //     ->update(array('status' => $status));

        ExamLines::where('id', '=', $id)
            ->update(array('status' => $status));   

        ExamCandidates::where('id', '=', $examcandidates_id)
            ->update(array('crebo_id' => $crebo_id));

        // return $examLine;
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ExamLines  $examLines
     * @return \Illuminate\Http\Response
     */
    public function delete(ExamLines $examLines)
    {
        //
    }
}