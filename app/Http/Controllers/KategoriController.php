<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use App\Http\Requests\StorekategoriRequest;
use App\Http\Requests\UpdatekategoriRequest;

class KategoriController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // if($request->has('search')) {
        //     $data = Kategori::where('kategori','LIKE','%' .$request->search.'%');
        // } else {
            $data = Kategori::all();
        // }

        return view('kategori.listkategori',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('kategori.tambah_kategori');

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
        $image = $request->file('file')->store('foto');
        Kategori::create([
            'kategori' => $request->nama,
            'file' => $request->file
        ]);
        
        return redirect()->route('kategori.listkategori')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function show(Kategori $kategori)
    {
        // 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function edit(Kategori $kategori)
    {
        //
        $data = $kategori::all();
        return view('kategori.edit_kategori',compact('data'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kategori $kategori)
    {
        //
        if ($request->hasFile('file')) {

            //upload new image
            $image = $request->file('file');
            $image->storeAs('public/foto', $image->hashName());

            //delete old image
            Storage::delete('public/foto/'.$kategori->gambar);

            //update post with new image
            $kategori->update([
                'file'     => $image->hashName(),
                'kategori'     => $request->nama,
               
            ]);

        } else {

            //update post without image
            $kategori->update([
                'file'     => $image->hashName(),
                'kategori'     => $request->nama,
            ]);
        }
        return redirect()->route('kategori.listkategori')->with('success',' Data Berhasil di Update');
}

    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kategori $kategori)
    {
        // $data = Kategori::find($id);
        $data->delete();
        return redirect()->route('kategori/listkategori')->with('success',' Data Berhasil di Hapus');
    }
}
