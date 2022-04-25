<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\kelas;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoresiswaRequest;
use App\Http\Requests\UpdatesiswaRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

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

        $data = User::all();

        return view('datasiswa.datasiswa',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createsiswa()
    {
        
        $kelas = kelas::all();
        return view('datasiswa.tambah_siswa',compact('kelas'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoresiswaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function storesiswa(Request $request)
    {
        //
        User::create([
            'nisn' => $request->nisn,
            'name' => $request->nama,
            'id_kelas' => $request->kelas,
            'jk' => $request->jk,
            'telephone' => $request->telp,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        
        return redirect()->route('siswa.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show(User $siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function editsiswa(User $siswa)
    {
        //
        $data = $siswa::all();
        $kelas = kelas::all();
        return view('datasiswa.edit_siswa',compact('data', 'siswa', 'kelas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatesiswaRequest  $request
     * @param  \App\Models\siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function updatesiswa(Request $request, User $siswa)
    {
        //
        $siswa->update([
            'nisn'     => $request->nisn,
            'name'     => $request->nama_siswa,
            'id_kelas'     => $request->kelas,
            'jk'     => $request->jk,
            'telp'     => $request->telp,
            'telephone' => $request->telp,
            'alamat' => $request->alamat,
            'email' => $request->email,
        ]);
    
        return redirect()->route('siswa.index')->with('success',' Data Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function deletesiswa(User $siswa)
    {
        //
        $siswa->delete();
       //redirect to index
       return redirect()->route('siswa.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
