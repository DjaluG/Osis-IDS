<?php

namespace App\Http\Controllers;

use App\Models\Osis;
use Illuminate\Http\Request;

class OsisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('page.welcome');
    }

    public function login()
    {
        return  view('visitor.login');
    }

    public function register()
    {
        return view('visitor.register');
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
     * @param  \App\Models\Osis  $osis
     * @return \Illuminate\Http\Response
     */
    public function show(Osis $osis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Osis  $osis
     * @return \Illuminate\Http\Response
     */
    public function edit(Osis $osis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Osis  $osis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Osis $osis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Osis  $osis
     * @return \Illuminate\Http\Response
     */
    public function destroy(Osis $osis)
    {
        //
    }
}
