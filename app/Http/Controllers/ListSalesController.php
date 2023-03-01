<?php

namespace App\Http\Controllers;

use App\Models\listsales;
use Illuminate\Http\Request;

class ListSalesController extends Controller
{
  
    public function listsales(Request $request){
      $data = listsales::all();
      return view('listsales',compact('data'));
    }

    public function tambahlist(){
      return view('tambahlist');
    }

    public function insertlist(Request $request){
      // dd($request);
      listsales::create([
        'no_faktur' => $request->no_faktur,
        'nama' => $request->nama,
        'alamat' => $request->alamat,
        'no_telpon' => $request->no_telpon,
        'quantity' => $request->quantity,
        'unit_price' => $request->unit_price,
      ]);
      return redirect()->route('listsales');
    }

    public function tampillist(Request $request, $id){
      $data = ListSales::find($id);
      // dd($data);
      return view('tampillist', compact('data'));
  
      // $data = $this->route('tampilkansales');
      // return view('tampilkansales', ['data' => $data]);
  
      //   $data = Sales::select('*')->where('id', $id)->get();
      //  return view('tampilkansales', ['data' => $data]);
    }

    public function delete($id){
      $data = ListSales::find($id);
      $data ->delete();
      return redirect()->route('listsales')->with('succes', 'Data berhasil Di hapus');
    }

    public function updatedata(Request $request, $id){
      $data = ListSales::find($id);
      $data ->update($request->all());
      return redirect()->route('listsales')->with('succes', 'Data berhasil Di Update');
    }

    public function detaillist(Request $request){
      $data = listsales::all();
      return view('detaillist');
    }
}
