<?php

namespace App\Http\Controllers;

use App\Models\historydenda;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorehistoryRequest;
use App\Http\Requests\UpdatehistoryRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HistorydendaController extends Controller
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
        //     $data = History::where('history','LIKE','%' .$request->search.'%');
        // } else {
            $data = historydenda::all();
        // }

        return view('history.historydenda',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('history.tambah_history');

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
        $image = $request->file('file');
        $image->storeAs('public/foto', $image->hashName());
        History::create([
            'namasiswa' => $request->namasiswa,
            'judulbuku' => $request->judulbuku,
            'file' => $image->hashName(),
            'nominaldenda' => $request->nominaldenda,
            'keterangan' => $request->keterangan,
        ]);
        
        return redirect()->route('history.index')->with(['success' => 'Data Berhasil Disimpan!']);
        // return view('history.historydenda');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\History  $history
     * @return \Illuminate\Http\Response
     */
    public function show(History $history)
    {
        // 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\History  $history
     * @return \Illuminate\Http\Response
     */
    public function edit(History $history)
    {
        //
        $data = $history::all();
        return view('history.edit_history',compact('data', 'history'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\History  $history
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, History $history)
    {
        //
        if ($request->hasFile('file')) {
            Storage::disk('local')->delete('public/foto/'.$history->image);

            $image = $request->file('file');
            $image->storeAs('public/foto', $image->hashName());
            //upload new image
            // $image = $request->file('file');
            // $image->storeAs('public/foto', $image->hashName());

            //delete old image
            // Storage::delete('public/foto/'.$history->gambar);

            //update post with new image
            $history->update([
                'file'     => $image->hashName(),
                'history'     => $request->nama,
               
            ]);

        } else {

            //update post without image
            $history->update([
                'history'     => $request->nama,
            ]);
        }
        return redirect()->route('history.index')->with('success',' Data Berhasil di Update');
}

    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\History  $history
     * @return \Illuminate\Http\Response
     */
    public function delete(History $history)
    {
        // $history = History::findOrFail($history->id);
        // dd($blog);
        Storage::delete('public/foto/'.$history->file);
        $history->delete();
       //redirect to index
       return redirect()->route('history.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
