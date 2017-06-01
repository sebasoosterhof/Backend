<?php

namespace App\Http\Controllers;

use App\ExamCandidates;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

header('Access-Control-Allow-Origin: *');

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
        //
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
