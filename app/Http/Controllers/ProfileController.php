<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;
use Illuminate\Support\Facades\File;
use Auth;

class ProfileController extends Controller

// edit profile
{
  public function edit(){
    return view('edit');
  }

  public function menu()
  {
    return view('menu');
  }
 public function settings(){
    $data=user::where('id', '!=', Auth::user()->id)->get();
    return view('settings',compact('data'));
 }
//  roles
 public function roles(){
    $data=user::all();
    return view('roles',compact('data'));
 }
public function tambahrole(){
    return viw('roles');
}
public function insertrole(Request $request){
    dd($request->all());
    User::create($request->all());

}
// endroles
 public function tambahset(){
   return view('settings');
 }

    public function insertset(Request $request){
        $req = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
            'role' => 'required',
        ]);
        $user = User::create($req);
        return redirect()->route('settings');
    }

    public function tampilset($id){
        $data= User::find($id);
        return view('settings', compact('data'));
    }

    public function updatedata(Request $request, $id){
        User::find($id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'role' => $request->role,
        ]);

        return redirect()->back();
    }

    // hapus
    public function hapusdata($id)
    {
        User::find($id)->delete();
        return redirect()->back();
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
