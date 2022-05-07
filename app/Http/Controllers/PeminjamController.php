<?php

namespace App\Http\Controllers;

use App\Models\dipinjam;
use App\Models\denda;
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

        $data = dipinjam::paginate(5);

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
        dipinjam::create([
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
    public function show(dipinjam $peminjam)
    {
        // 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Peminjam  $peminjam
     * @return \Illuminate\Http\Response
     */
    public function editpeminjam(dipinjam $peminjam)
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
    public function updatepeminjam(Request $request, dipinjam $peminjam)
    {
        //
        $peminjam->update([
            'tanggal_kembali'     => $request->tanggalkembali,
        ]);
        if($request->denda!=0){
            $denda=new denda;
            $denda->id_pinjam=$peminjam->id;
            $denda->denda=$request->denda;
            $denda->keterangan="Telat mengembalikan buku";
            $denda->save();
        }
        return redirect()->route('peminjam.index')->with('success',' Data Berhasil di Update');
    }

    public function delete($id){
        $data= dipinjam::find($id);
        $data->delete();
        return redirect()->route('peminjam.index')->with('success','Data Berhasil Di Hapus');
    }
}

    

   


