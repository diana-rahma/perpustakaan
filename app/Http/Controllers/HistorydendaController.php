<?php

namespace App\Http\Controllers;

use App\Models\denda;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorehistoryRequest;
use App\Http\Requests\UpdatehistoryRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HistorydendaController extends Controller
{
    public function index(Request $request){

        if($request->has('search')){
            $data = denda::where('namasiswa','LIKE','%' .$request->search. '%')->paginate(3);
        }else{
            $data = denda::paginate(10);
        }
        
        return view('history.historydenda',compact('data'));
    }

    public function tambahhistory(){

        return view('history.tambah_history');
    }

    public function inserthistory(Request $request){
        //dd($request->all());
        $data = denda::create($request->all());
        if($request->hasFile('file')){
            $request->file('file')->move('foto/',$request->file('file')->getClientOriginalName());
            $data->file = $request->file('file')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('historydenda')->with('success','Data Berhasil Di Tambahkan');
        
    }

    public function edithistory($id){
        
        $data= denda::find($id);
        return view('history.edit_history', compact('data'));
    }

    public function updatehistory(Request $request, $id){
        $data= denda::find($id);
        $data->update($request->all());
        if($request->hasFile('file')){
            $request->file('file')->move('foto/',$request->file('file')->getClientOriginalName());
            $data->file = $request->file('file')->getClientOriginalName();
            $data->update();
        }
        return redirect()->route('historydenda')->with('success','Data Berhasil Di Update');
    }

    public function delete($id){
        $data= denda::find($id);
        $data->delete();
        return redirect()->route('historydenda')->with('success','Data Berhasil Di Hapus');
    }
}
