<?php

namespace App\Http\Controllers;
use App\Models\transaksi;
use App\Models\obat;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
     //read
     public function index_jual_tampil(Request $request)
     {

        if($request->has('search')){
            $alldata = Transaksi::where('nama_pembeli','LIKE','%'.$request->search. '%')->paginate(3);
        }else{
            $alldata = Transaksi::paginate(3);
        }

        
        // dd($allData);
         return view('index_jual',['data'=>$alldata]);
     }
     public function index_jual_edit($id)
     {
        $dataEdit = Transaksi::with('obat')->find($id);
        $obat = obat::all();
        return view('edit2', compact('dataEdit','obat'));
    }
     public function index_jual_add()
     {
        $datas = obat::all();
         return view('add2', compact('datas'));
     }
 
     //create
     public function add_jual(Request $request)
     {
         $newDatas = new Transaksi();
 
         $newDatas->nama_pembeli= $request->nama_pembeli;
         $newDatas->no_telp= $request->no_telp;
         $newDatas->id_layanan= $request->id_layanan;
         $newDatas->save();
         
         return redirect('/jual-view');
     }

 
     //update
     public function edit_jual(Request $request)
     {
        Transaksi::where('id',$request->id)->update(
            [
                'nama_pembeli'=>$request->nama_pembeli,
                'no_telp'=>$request->no_telp,
                'id_layanan'=>$request->obat,
            ]
        );
        return redirect('/jual-view');
    }
 
     //delete
     public function del_jual($id)
     {
         $dataDelete= Transaksi::find($id);
         $dataDelete->delete();
         return redirect('/jual-view');
     }
 
}
