<?php

namespace App\Http\Controllers;

use App\Models\dipinjam;
use App\Http\Requests\StoredipinjamRequest;
use App\Http\Requests\UpdatedipinjamRequest;

class DipinjamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoredipinjamRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoredipinjamRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\dipinjam  $dipinjam
     * @return \Illuminate\Http\Response
     */
    public function show(dipinjam $dipinjam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\dipinjam  $dipinjam
     * @return \Illuminate\Http\Response
     */
    public function edit(dipinjam $dipinjam)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatedipinjamRequest  $request
     * @param  \App\Models\dipinjam  $dipinjam
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatedipinjamRequest $request, dipinjam $dipinjam)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\dipinjam  $dipinjam
     * @return \Illuminate\Http\Response
     */
    public function destroy(dipinjam $dipinjam)
    {
        //
    }
}