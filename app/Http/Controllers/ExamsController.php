<?php

namespace App\Http\Controllers;

use App\Exams;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExamsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $exams = DB:: table('exams')->get();

        return $exams;
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
     * @param  \App\Exams  $exams
     * @return \Illuminate\Http\Response
     */
    public function show(Exams $exams)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Exams  $exams
     * @return \Illuminate\Http\Response
     */
    public function edit(Exams $exams)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Exams  $exams
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Exams $exams)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Exams  $exams
     * @return \Illuminate\Http\Response
     */
    public function destroy(Exams $exams)
    {
        //
    }
}