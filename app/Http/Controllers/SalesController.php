<?php

namespace App\Http\Controllers;

use App\Models\Sales;
use Illuminate\Http\Request;

class SalesController extends Controller
{
     public function sales()
   {
      $data = Sales::all();
      return view('sales',compact('data'));
   }

   public function tambahsales(){
      return view('tambahsales');
    }

    public function insertdata(Request $request){
      // dd($request->all());
      Sales::create($request->all());
      return redirect()->route('sales');
    }

    public function tampilsales(Request $request, $id){
      $data = Sales::find($id);
      // dd($data);
      return view('tampilsales', compact('data'));
  
      // $data = $this->route('tampilkansales');
      // return view('tampilkansales', ['data' => $data]);
  
      //   $data = Sales::select('*')->where('id', $id)->get();
      //  return view('tampilkansales', ['data' => $data]);
    }

    public function delete($id){
      $data = Sales::find($id);
      $data->delete();
      return redirect()->route('sales')->with('succes', 'Data berhasil Di hapus');
    }

    public function detail(Request $request){
      return view ('detailsales');
    }
}
