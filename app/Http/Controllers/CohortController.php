<?php

namespace App\Http\Controllers;

use App\cohort;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CohortController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cohorts = DB:: table('cohorts')->get();

        return $cohorts;
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
     * @param  \App\cohort  $cohort
     * @return \Illuminate\Http\Response
     */
    public function show(cohort $cohort)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\cohort  $cohort
     * @return \Illuminate\Http\Response
     */
    public function edit(cohort $cohort)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\cohort  $cohort
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cohort $cohort)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cohort  $cohort
     * @return \Illuminate\Http\Response
     */
    public function destroy(cohort $cohort)
    {
        //
    }
}
