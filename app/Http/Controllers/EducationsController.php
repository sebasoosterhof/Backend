<?php

namespace App\Http\Controllers;

use App\Educations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EducationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $educations = DB:: table('educations')->get();

        return $educations;
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
     * @param  \App\Educations  $educations
     * @return \Illuminate\Http\Response
     */
    public function show(Educations $educations)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Educations  $educations
     * @return \Illuminate\Http\Response
     */
    public function edit(Educations $educations)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Educations  $educations
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Educations $educations)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Educations  $educations
     * @return \Illuminate\Http\Response
     */
    public function destroy(Educations $educations)
    {
        //
    }
}
