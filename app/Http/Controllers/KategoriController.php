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
        $image = $request->file('file');
        $image->storeAs('public/foto', $image->hashName());
        Kategori::create([
            'kategori' => $request->kategori,
            'file' => $image->hashName(),
        ]);
        
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
        $kategori->update([
            'kategori'     => $request->kategori,
            'file'     => $request->file,
        ]);
    
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
        // dd($blog);
        Storage::delete('public/foto/'.$kategori->file);
        $kategori->delete();

        //redirect to index
        return redirect()->route('kategori.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
