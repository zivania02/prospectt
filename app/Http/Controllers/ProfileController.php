<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;
use Illuminate\Support\Facades\File;

class ProfileController extends Controller

// edit profile
{
  public function edit(){
    return view('edit');
  }
  public function roles()
  {
    return view('roles');
  }
  public function menu()
  {
    return view('menu');
  }


//crud settings
 public function settings(){
    $data=user::all();
    return view('settings',compact('data'));
 }

 public function tambahset(){
   return view('settings');
 }


 public function insertset(Request $request){
    // dd($request->all());
    User::create($request->all());
    return redirect()->route('settings');
}






  public function update( Request $request, $id){
     $data = User::find($id);
     if ($request->hasFile('image')) {
      $destination = 'image/' . $data->image;
      if (File::exists($destination)) {
        File::delete($destination);
      }
      $file = $request->file('image');
      $extension = $file->getClientOriginalName();
      $filename = $extension;
      $file->move('image/', $filename);
      $data->image = $filename;
    }
    $data->update($request->all());

    return redirect()->back();
  }



}
