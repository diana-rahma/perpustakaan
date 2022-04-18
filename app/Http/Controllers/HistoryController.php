<?php

namespace App\Http\Controllers;

use App\Models\history;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorehistoryRequest;
use App\Http\Requests\UpdatehistoryRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HistoryController extends Controller
{

    public function index() {
        
        return view('history');
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
     * @param  \App\Http\Requests\StorehistoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorehistoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\history  $history
     * @return \Illuminate\Http\Response
     */
    public function show(history $history)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\history  $history
     * @return \Illuminate\Http\Response
     */
    public function edit(history $history)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatehistoryRequest  $request
     * @param  \App\Models\history  $history
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatehistoryRequest $request, history $history)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\history  $history
     * @return \Illuminate\Http\Response
     */
    public function destroy(history $history)
    {
        //
    }
}
