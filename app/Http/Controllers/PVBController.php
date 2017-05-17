<?php

namespace App\Http\Controllers;

use App\pvb;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PVBController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pvbs = DB:: table('pvbs')->get();

        return $pvbs;
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
     * @param  \App\pvb  $pvb
     * @return \Illuminate\Http\Response
     */
    public function show(pvb $pvb)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\pvb  $pvb
     * @return \Illuminate\Http\Response
     */
    public function edit(pvb $pvb)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pvb  $pvb
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pvb $pvb)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\pvb  $pvb
     * @return \Illuminate\Http\Response
     */
    public function destroy(pvb $pvb)
    {
        //
    }
}
