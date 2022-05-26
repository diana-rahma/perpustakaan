<?php

namespace App\Http\Controllers;

use App\Models\buku;
use App\Models\dipinjam;
use App\Models\kategori;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use App\Http\Requests\StorelistbukuRequest;
use App\Http\Requests\UpdatelistbukuRequest;

class ListbukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $buku = buku::paginate(12);
        $kategori = kategori::all();

        if (
            $request->query('kategori')!='' ||
            $request->query('pengarang')!=''
        ) {
            $buku = buku::where('pengarang',$request->query('pengarang'));
            if (
                $request->query('kategori')!='' ){
                
                    $buku=$buku->orWhereHas('kategori',function(Builder $query) use($request){
                        $buku=$query;
                        if($request->query('kategori')!='') { 
                            $buku = $query->where('kategori', $request->query('kategori'));
                        }
                        if (
                            $request->query('kategori')!='' 
                        ){
                            return $buku;
                        } 
                       
                    });
                }
            $buku = $buku->paginate(12);
        }

        $pengarang = buku::select('pengarang')->distinct()->get();


        return view('listbuku.listbuku',compact('buku', 'kategori', 'pengarang'));
    }

    public function detail($id) {
        $pinjambuku = dipinjam::where('id_buku', $id)->where('status','Pending')->first();
        $buku = buku::find($id);
        return view('buku.detail',compact('buku','pinjambuku'));
    }

    public function detailkategori($id) {
        $kategori = kategori::find($id);
        $buku = buku::whereHas('kategori', function(Builder $query) use($id) {

        return $query->where('id', $id);
        })->paginate(8);
        return view('kategori.detail',compact('buku'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorelistbukuRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorelistbukuRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\listbuku  $listbuku
     * @return \Illuminate\Http\Response
     */
    public function show(buku $listbuku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\listbuku  $listbuku
     * @return \Illuminate\Http\Response
     */
    public function edit(buku $listbuku)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatelistbukuRequest  $request
     * @param  \App\Models\listbuku  $listbuku
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatelistbukuRequest $request, buku $listbuku)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\listbuku  $listbuku
     * @return \Illuminate\Http\Response
     */
    public function destroy(buku $listbuku)
    {
        //
    }
}
