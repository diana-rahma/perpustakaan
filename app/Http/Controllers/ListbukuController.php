<?php

namespace App\Http\Controllers;

use App\Models\buku;
use App\Models\kategori;
use App\Http\Requests\StorelistbukuRequest;
use App\Http\Requests\UpdatelistbukuRequest;
use Illuminate\Database\Eloquent\Builder;

class ListbukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buku = buku::paginate(12);
        $kategori = kategori::all();
        return view('listbuku.listbuku',compact('buku', 'kategori'));
    }

    public function detail($id) {
        $buku = buku::find($id);
        return view('buku.detail',compact('buku'));
    }

    public function detailkategori($id) {
        $kategori = kategori::find($id);
        $buku = buku::whereHas('kategori', function(Builder $query) use($id) {

        return $query->where('id', $id);
        })->paginate(8);
        return view('kategori.detail',compact('buku'));
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
     * @param  \App\Http\Requests\StorelistbukuRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorelistbukuRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\listbuku  $listbuku
     * @return \Illuminate\Http\Response
     */
    public function show(buku $listbuku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\listbuku  $listbuku
     * @return \Illuminate\Http\Response
     */
    public function edit(buku $listbuku)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatelistbukuRequest  $request
     * @param  \App\Models\listbuku  $listbuku
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatelistbukuRequest $request, buku $listbuku)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\listbuku  $listbuku
     * @return \Illuminate\Http\Response
     */
    public function destroy(buku $listbuku)
    {
        //
    }
}
