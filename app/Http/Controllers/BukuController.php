<?php

namespace App\Http\Controllers;

use App\Models\buku;
use App\Models\kategori;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorebukuRequest;
use App\Http\Requests\UpdatebukuRequest;
use App\Models\dipinjam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class BukuController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('search')){
            $data = buku::where('buku','LIKE','%' .$request->search. '%')->paginate(3);
        }else{
            $data = buku::paginate(3);
        }
        return view('databuku.databuku',compact('data'));
    }

    public function tambahbuku(){

        $kategori = kategori::all();
        return view('databuku.tambah_buku',compact('kategori'));
    }

    public function insertbuku(Request $request){
        //dd($request->all());
        $data = buku::create($request->all());
        if($request->hasFile('file')){
            $request->file('file')->move('foto/',$request->file('file')->getClientOriginalName());
            $data->file = $request->file('file')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('databuku')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function editbuku($id){
        
        $data= buku::find($id);
        $kategori = kategori::all();
        return view('databuku.edit_buku',compact('data', 'kategori'));
    }

    public function updatebuku(Request $request, $id){
        $data= buku::find($id);
        $data->update($request->all());
        if($request->hasFile('file')){
            $request->file('file')->move('foto/',$request->file('file')->getClientOriginalName());
            $data->file = $request->file('file')->getClientOriginalName();
            $data->update();
        }
        return redirect()->route('databuku')->with('success',' Data Berhasil di Update');
    }
    
    public function deletebuku($id){
        $data= Buku::find($id);
        $data->delete();
        return redirect()->route('databuku')->with('success','Data Berhasil Di Hapus');
    }

    public function pinjambuku($id) {
        $user = auth()->user();
        $data = new dipinjam();
        $data->id_buku=$id;
        $data->id_user=$user->id;
        $data->status='Pending';
        $data->tenggat_pengembalian=Carbon::now()->addDays(7);
        $data->tanggal_pinjam=Carbon::now();
        $data->save();
        return redirect()->back()->with('success','Buku berhasil dipinjam, silahkan ambil di perpustakaan');
        
    }

    public function historydenda($id) {
        $user = auth()->user();
        $data = new dipinjam();
        $data->id_buku=$id;
        $data->id_user=$user->id;
    }
}
