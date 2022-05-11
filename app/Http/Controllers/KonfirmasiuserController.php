<?php

namespace App\Http\Controllers;

use App\Models\dipinjam;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorekonfirmasiuserRequest;
use App\Http\Requests\UpdatekonfirmasiuserRequest;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class KonfirmasiuserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = dipinjam::whereHas('user',function(Builder $query){
            return $query->where('id',Auth::user()->id);
        })->paginate(5);
        
        return view('konfirmasiuser',compact('data'));
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
     * @param  \App\Http\Requests\StorekonfirmasiuserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorekonfirmasiuserRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\konfirmasiuser  $konfirmasiuser
     * @return \Illuminate\Http\Response
     */
    public function show(konfirmasiuser $konfirmasiuser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\konfirmasiuser  $konfirmasiuser
     * @return \Illuminate\Http\Response
     */
    public function edit(konfirmasiuser $konfirmasiuser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatekonfirmasiuserRequest  $request
     * @param  \App\Models\konfirmasiuser  $konfirmasiuser
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatekonfirmasiuserRequest $request, konfirmasiuser $konfirmasiuser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\konfirmasiuser  $konfirmasiuser
     * @return \Illuminate\Http\Response
     */
    public function destroy(konfirmasiuser $konfirmasiuser)
    {
        //
    }
}
