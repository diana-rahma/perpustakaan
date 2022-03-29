<?php

namespace App\Http\Controllers;

use App\Models\peminjam;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorepeminjamRequest;
use App\Http\Requests\UpdatepeminjamRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PeminjamController extends Controller
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
        //     $data = Peminjam::where('peminjam','LIKE','%' .$request->search.'%');
        // } else {
            $data = Peminjam::all();
        // }

        return view('datapeminjam.datapeminjam',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createpeminjam()
    {
        //
        return view('datapeminjam.tambah_peminjam');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storepeminjam(Request $request)
    {
        //
        Peminjam::create([
            'namasiswa' => $request->namasiswa,
            'judulbuku' => $request->judulbuku,
            'tanggalpinjam' => $request->tanggalpinjam,
            'tanggalkembali' => $request->tanggalkembali,
        ]);
        
        return redirect()->route('peminjam.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Peminjam  $peminjam
     * @return \Illuminate\Http\Response
     */
    public function show(Peminjam $peminjam)
    {
        // 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Peminjam  $peminjam
     * @return \Illuminate\Http\Response
     */
    public function editpeminjam(Peminjam $peminjam)
    {
        //
        $data = $peminjam::all();
        return view('datapeminjam.edit_peminjam',compact('data', 'peminjam'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Peminjam  $peminjam
     * @return \Illuminate\Http\Response
     */
    public function updatepeminjam(Request $request, Peminjam $peminjam)
    {
        //
        $peminjam->update([
            'namasiswa'     => $request->namasiswa,
            'judulbuku'     => $request->judulbuku,
            'tanggalpinjam'     => $request->tanggalpinjam,
            'tanggalkembali'     => $request->tanggalkembali,
        ]);
        return redirect()->route('peminjam.index')->with('success',' Data Berhasil di Update');
    }


     /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Peminjam  $peminjam
     * @return \Illuminate\Http\Response
     */
    public function deletepeminjam(Peminjam $peminjam)
    {
        $peminjam->delete();
       //redirect to index
       return redirect()->route('peminjam.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}

    

   


