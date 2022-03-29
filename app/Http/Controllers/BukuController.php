<?php

namespace App\Http\Controllers;

use App\Models\buku;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorebukuRequest;
use App\Http\Requests\UpdatebukuRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Buku::all();

        return view('databuku.databuku',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createbuku()
    {
        //
        return view('databuku.tambah_buku');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorebukuRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function storebuku(Request $request)
    {
        //
        $image = $request->file('file');
        $image->storeAs('public/foto', $image->hashName());
        Buku::create([
            'kode' => $request->kode,
            'judulbuku' => $request->judulbuku,
            'pengarang' => $request->pengarang,
            'penerbit' => $request->penerbit,
            'tahun' => $request->tahun,
            'lokasi' => $request->lokasi,
            'kategori' => $request->kategori,
            'file' => $image->hashName(),
        ]);
        
        return redirect()->route('buku.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function show(buku $buku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function editbuku(Buku $buku)
    {
        //
        $data = $buku::all();
        return view('databuku.edit_buku',compact('data', 'buku'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatebukuRequest  $request
     * @param  \App\Models\buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function updatebuku(Request $request, Buku $buku)
    {
        //
        $buku->update([
            'kode'     => $request->kode,
            'judulbuku'     => $request->judulbuku,
            'pengarang'     => $request->pengarang,
            'penerbit'     => $request->penerbit,
            'tahun'     => $request->tahun,
            'lokasi'     => $request->lokasi,
            'kategori'     => $request->kategori,
        ]);
    
        return redirect()->route('buku.index')->with('success',' Data Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function deletebuku(Buku $buku)
    {
        //
        $buku->delete();
        //redirect to index
        return redirect()->route('buku.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
