<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorekategoriRequest;
use App\Http\Requests\UpdatekategoriRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KategoriController extends Controller
{
    public function index(Request $request){

        if($request->has('search')){
            $data = Kategori::where('kategori','LIKE','%' .$request->search. '%')->paginate(3);
        }else{
            $data = Kategori::paginate(8);
        }
        
        return view('kategori.listkategori',compact('data'));
    }

    public function tambahkategori(){

        return view('kategori.tambah_kategori');
    }

    public function insertkategori(Request $request){
        //dd($request->all());
        $data = Kategori::create($request->all());
        if($request->hasFile('file')){
            $request->file('file')->move('foto/',$request->file('file')->getClientOriginalName());
            $data->file = $request->file('file')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('listkategori')->with('success','Data Berhasil Di Tambahkan');
        
    }

    public function editkategori($id){
        
        $data= Kategori::find($id);
        return view('kategori.edit_kategori', compact('data'));
    }

    public function updatekategori(Request $request, $id, Kategori $kategori){
        $data= Kategori::find($id);
        $data->update($request->all());
        if($request->hasFile('file')){
            $request->file('file')->move('foto/',$request->file('file')->getClientOriginalName());
            $data->file = $request->file('file')->getClientOriginalName();
            $data->update();
        }
        return redirect()->route('listkategori')->with('success','Data Berhasil Di Update');
    }

    public function delete($id, Kategori $kategori){
        $data= Kategori::find($id);
        $data->delete();
        return redirect()->route('listkategori')->with('success','Data Berhasil Di Hapus');
    }

}
