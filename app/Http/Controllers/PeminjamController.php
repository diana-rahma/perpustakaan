<?php

namespace App\Http\Controllers;

use App\Models\peminjam;
use App\Http\Requests\StorepeminjamRequest;
use App\Http\Requests\UpdatepeminjamRequest;

class PeminjamController extends Controller
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
     * @param  \App\Http\Requests\StorepeminjamRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorepeminjamRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\peminjam  $peminjam
     * @return \Illuminate\Http\Response
     */
    public function show(peminjam $peminjam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\peminjam  $peminjam
     * @return \Illuminate\Http\Response
     */
    public function edit(peminjam $peminjam)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatepeminjamRequest  $request
     * @param  \App\Models\peminjam  $peminjam
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatepeminjamRequest $request, peminjam $peminjam)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\peminjam  $peminjam
     * @return \Illuminate\Http\Response
     */
    public function destroy(peminjam $peminjam)
    {
        //
    }
}
