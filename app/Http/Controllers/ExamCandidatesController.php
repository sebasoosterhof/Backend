<?php

namespace App\Http\Controllers;

use App\ExamCandidates;
use App\Students;
use App\Educations;
use App\ExamLines;
use Request;
use Illuminate\Support\Facades\DB;

class ExamCandidatesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $examCandidates =  DB::table('examcandidates')
            ->join('students', 'examcandidates.student_id', '=', 'students.id')
            ->join('educations', 'examcandidates.crebo_id', '=', 'educations.id')
            ->select('examcandidates.id', 'students.firstname', 'students.lastname', 'students.studentnumber', 'educations.crebo', 'educations.description')
            ->get();

        return $examCandidates;
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
    public function store(Request $request)
    {
        $examCandidate = $request::all();
        // $id = $request::input('id');
        $firstname = $request::input('firstname');
        $lastname = $request::input('lastname');
        $studentnumber = $request::input('studentnumber');
        $education = $request::input('education');
        $crebo_id = $request::input('crebo_id');
        $crebo = $request::input('crebo');
        $cohort = $request::input('cohort');


        var_dump($examCandidate);
        // echo $id;
        echo $firstname;
        echo $lastname;
        echo $studentnumber;
        echo $education;
        echo $crebo_id;
        echo $crebo;
        echo $cohort;

        $student = new Students;
        $student->firstname = $firstname;
        $student->lastname = $lastname;
        $student->studentnumber = $studentnumber;
        $student->save();

        $examCandidate = new ExamCandidates;
        $examCandidate->student_id = $student->id;
        $examCandidate->crebo_id = $crebo_id;
        $examCandidate->save();

        $examLine = new ExamLines;
        $examLine->examcandidate_id = $examCandidate->id;
        $examLine->cohort_id = 3;
        $examLine->remark_id = 1;
        $examLine->exam_id = 1;
        $examLine->save();       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ExamCandidates  $examCandidates
     * @return \Illuminate\Http\Response
     */
    public function show(ExamCandidates $examCandidates)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ExamCandidates  $examCandidates
     * @return \Illuminate\Http\Response
     */
    public function edit(ExamCandidates $examCandidates)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ExamCandidates  $examCandidates
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ExamCandidates $examCandidates)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ExamCandidates  $examCandidates
     * @return \Illuminate\Http\Response
     */
    public function destroy(ExamCandidates $examCandidates)
    {
        //
    }
}
