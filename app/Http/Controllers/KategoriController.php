<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorekategoriRequest;
use App\Http\Requests\UpdatekategoriRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Kategori::all();

        return view('kategori.listkategori',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createkategori()
    {
        return view('kategori.tambah_kategori');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorekategoriRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function storekategori(Request $request)
    {
        //dd($request->all());

        $data = Kategori::create($request->all());

        if ($request->hasFile('file')) {
            $request->file('file')->move('foto/', $request->file('file')->getClientOriginalName());
            $data->file = $request->file('file')->getClientOriginalName();
            $data->save();
        }
        
        return redirect()->route('kategori.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function show(kategori $kategori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function editkategori(Kategori $kategori)
    {
        $data = $kategori::all();
        return view('kategori.edit_kategori',compact('data', 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatekategoriRequest  $request
     * @param  \App\Models\kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function updatekategori(Request $request, Kategori $kategori)
    {

        $data = Kategori::find($kategori);
        $data->update($request->all());

        if ($request->hasFile('file')) {
            $request->file('file')->move('foto/', $request->file('file')->getClientOriginalName());
            $data->file = $request->file('file')->getClientOriginalName();
            $data->update();
        }
    
        return redirect()->route('kategori.index')->with('success',' Data Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function deletekategori(Kategori $kategori)
    {

        $data = Kategori::find($kategori);
        $data->delete();

        //redirect to index
        return redirect()->route('kategori.index')->with('success', 'Data Berhasil Dihapus!');
    }
}
