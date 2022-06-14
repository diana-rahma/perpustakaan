<?php

namespace App\Http\Controllers;

use App\Models\dipinjam;
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
            $data = dipinjam::paginate(10);

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
        $data = dipinjam::all();
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
        //dd($request->all());

        $data = dipinjam::create($request->all());

        if ($request->hasFile('file')) {
            $request->file('file')->move('foto/', $request->file('file')->getClientOriginalName());
            $data->file = $request->file('file')->getClientOriginalName();
            $data->save();
        }
        
        return redirect()->route('konfirmasi.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\konfirmasi  $konfirmasi
     * @return \Illuminate\Http\Response
     */
    public function show(dipinjam $konfirmasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\konfirmasi  $konfirmasi
     * @return \Illuminate\Http\Response
     */
    public function edit(dipinjam $konfirmasi)
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
    public function update(UpdatekonfirmasiRequest $request, dipinjam $konfirmasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\konfirmasi  $konfirmasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(dipinjam $konfirmasi)
    {
        //
    }

    public function setstatus(Request $request, $id) {

        $pinjam = dipinjam::find($id);

        $pinjam->status = $request->status;
        $pinjam->save();
        
        return redirect()->back();
    }
}
