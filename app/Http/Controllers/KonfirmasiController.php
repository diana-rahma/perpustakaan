<?php

namespace App\Http\Controllers;

use App\Models\konfirmasi;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorekonfirmasiRequest;
use App\Http\Requests\UpdatekonfirmasiRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class KonfirmasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $data = konfirmasi::all();

        return view('konfirmasi.konfirmasi',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createkonfirmasi()
    {
        //
        $data = konfirmasi::all();
        return view('konfirmasi.tambah_konfirmasi');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorekonfirmasiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function storekonfirmasi(Request $request)
    {
        //
        $image = $request->file('file');
        $image->storeAs('public/foto', $image->hashName());
        konfirmasi::create([
            'namasiswa' => $request->namasiswa,
            'judulbuku' => $request->judulbuku,
            'file' => $image->hashName(),
            'status' => $request->status,
        ]);
        
        return redirect()->route('konfirmasi.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\konfirmasi  $konfirmasi
     * @return \Illuminate\Http\Response
     */
    public function show(konfirmasi $konfirmasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\konfirmasi  $konfirmasi
     * @return \Illuminate\Http\Response
     */
    public function edit(konfirmasi $konfirmasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatekonfirmasiRequest  $request
     * @param  \App\Models\konfirmasi  $konfirmasi
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatekonfirmasiRequest $request, konfirmasi $konfirmasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\konfirmasi  $konfirmasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(konfirmasi $konfirmasi)
    {
        //
    }
}
