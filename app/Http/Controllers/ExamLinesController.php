<?php

namespace App\Http\Controllers;

use App\ExamLines;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExamLinesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $examLines = DB:: table('examlines')->get();

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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ExamLines  $examLines
     * @return \Illuminate\Http\Response
     */
    public function show(ExamLines $examLines)
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
    public function update(Request $request, ExamLines $examLines)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ExamLines  $examLines
     * @return \Illuminate\Http\Response
     */
    public function destroy(ExamLines $examLines)
    {
        //
    }
}
