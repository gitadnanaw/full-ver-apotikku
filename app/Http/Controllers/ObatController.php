<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\obat;

class ObatController extends Controller
{
 
     public function index_obat_tampil(Request $request)
     {
        if($request->has('search')){
            $allData = obat::where('nama_obat','LIKE','%'.$request->search. '%')->paginate(3);
        }else{
            $allData = obat::paginate(3);
        }
         return view('index_obat',['data'=>$allData]);
     }
     public function index_obat_edit($id)
     {
         $dataEdit = obat::find($id);
         return view('edit1',['data'=>$dataEdit]);
     }
     public function index_obat_add()
     {
         return view('add1');
     }
 
     //create
     public function add_obat(Request $request)
     {
         $newData = new obat();
 
         $newData->nama_obat= $request->nama_obat;
         $newData->harga= $request->harga;
         $newData->save();
         
         return redirect('/obat-view');
 
     }
 
     //update
     public function edit_obat(Request $request)
     {
        obat::where('id',$request->id)->update(
             [
                 'nama_obat'=>$request->nama_obat,
                 'harga'=>$request->harga,
             ]
         );
         return redirect('/obat-view');
     }
 
     //delete
     public function del_obat($id)
     {
         $dataDelete= obat::find($id);
         $dataDelete->delete();
         return redirect('/obat-view');
     }
 
}
