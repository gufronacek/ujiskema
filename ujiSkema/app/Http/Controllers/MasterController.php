<?php

namespace App\Http\Controllers;

use App\Models\Hasil;
use App\Models\Kandidat;
use App\Models\Master;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class MasterController extends Controller
{
    public function index(){

        return view('layout.v_user');
    }
    public function pemilih(){
        $data = Kandidat::get();
        if (Hasil::where('pemilih_id', Auth::guard('pemilih')->id())->exists()) {
            Auth::guard('pemilih')->user()->voted = true;
        };
        return view('layout.pemilih',['data'=>$data]);
    }
  public function dasboard(){
    $data = Kandidat::get();
    return view('table.dasboard', ['data' => $data]);
  }

  public function admin()
{
    $admin = Master::all();
    return view('table.admin', ['admin' => $admin]);
}
public function tambah()
{
    return view('form.form_admin');
}
public function insert(Request $request){
    $request->validate([
                'name' => 'required',
                'email' => 'required',
                'password' => 'required',
            ]);
            Master::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
            return redirect('/admin');
}
    public function edit( $id){
        $data = Master::find($id);
       return view('form.edit_admin',['data' => $data]);
    }

    public function update(Request $request, $id) {
        $data = Master::find($id);
        $data->update($request->all());
        return redirect('/admin');
    }
    public function delete($id){
            $data = Master::find($id);
            $data->delete();
            return redirect('/admin');




}
}
