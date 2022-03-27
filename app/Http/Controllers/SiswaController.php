<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoresiswaRequest;
use App\Http\Requests\UpdatesiswaRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $data = Siswa::all();

        return view('datasiswa.datasiswa',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('datasiswa.tambah_siswa');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoresiswaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        Siswa::create([
            'nisn' => $request->nisn,
            'nama_siswa' => $request->nama,
            'kelas' => $request->kelas,
            'jk' => $request->jk,
            'telp' => $request->telp,
        ]);
        
        return redirect()->route('datasiswa.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show(siswa $siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit(siswa $siswa)
    {
        //
        $data = $siswa::all();
        return view('datasiswa.edit_siswa',compact('data', 'siswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatesiswaRequest  $request
     * @param  \App\Models\siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Siswa $siswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function delete(Siswa $siswa)
    {
        //
        Storage::delete('public/foto/'.$siswa->file);
        $siswa->delete();
       //redirect to index
       return redirect()->route('datasiswa.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
