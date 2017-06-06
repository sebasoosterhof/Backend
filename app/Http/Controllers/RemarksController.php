<?php

namespace App\Http\Controllers;

use App\Remarks;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

// header('Access-Control-Allow-Origin: *');

class RemarksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $remarks =  DB::table('remarks')
            ->join('users', 'remarks.user_id', '=', 'users.id')

            ->select('remarks.id', 
                     'users.firstname as user_firstname',
                     'users.lastname as user_lastname',
                     'remarks.component',
                     'remarks.description',
                     'remarks.created_at'
                     )
            ->get();

        return $remarks;
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
     * @param  \App\Remarks  $remarks
     * @return \Illuminate\Http\Response
     */
    public function show(Remarks $remarks)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Remarks  $remarks
     * @return \Illuminate\Http\Response
     */
    public function edit(Remarks $remarks)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Remarks  $remarks
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Remarks $remarks)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Remarks  $remarks
     * @return \Illuminate\Http\Response
     */
    public function destroy(Remarks $remarks)
    {
        //
    }
}
