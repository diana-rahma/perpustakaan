<?php

namespace App\Http\Controllers;

use App\Models\denda;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoredendaRequest;
use App\Http\Requests\UpdatedendaRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DendaController extends Controller
{
    public function index() 
    {
        return view('denda');
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
     * @param  \App\Http\Requests\StoredendaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoredendaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\denda  $denda
     * @return \Illuminate\Http\Response
     */
    public function show(denda $denda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\denda  $denda
     * @return \Illuminate\Http\Response
     */
    public function edit(denda $denda)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatedendaRequest  $request
     * @param  \App\Models\denda  $denda
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatedendaRequest $request, denda $denda)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\denda  $denda
     * @return \Illuminate\Http\Response
     */
    public function destroy(denda $denda)
    {
        //
    }
}
