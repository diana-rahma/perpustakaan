<?php

namespace App\Http\Controllers;

use App\Models\kelas;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorekelasRequest;
use App\Http\Requests\UpdatekelasRequest;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelas = kelas::all();

        return view('datakelas.listkelas',compact('kelas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('datakelas.tambah_kelas');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorekelasRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorekelasRequest $request)
    {
        //
        Kelas::create([
            'kelas' => $request->kelas,
            'jurusan'=> $request->jurusan,
            'alfabet' => $request->alfabet
            
        ]);
        
        return redirect()->route('datakelas.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function show(kelas $kelas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function edit(kelas $kelas)
    {
        //
        $kelas = $kelas::all();
        return view('datakelas.edit_kelas',compact('data', 'kelas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatekelasRequest  $request
     * @param  \App\Models\kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatekelasRequest $request, kelas $kelas)
    {
        //
        $kelas->update([
            'kelas'     => $request->kelas,
            'jurusan'     => $request->jurusan,
            'alfabet'     => $request->alfabet,
        ]);
    return redirect()->route('kelas.index')->with('success',' Data Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function destroy(kelas $kelas)
    {
        //
        $kelas->delete();
        return redirect()->route('kelas.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
