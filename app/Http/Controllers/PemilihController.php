<?php

namespace App\Http\Controllers;

use App\Models\Hasil;
use App\Models\Pemilih;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PemilihController extends Controller
{
    public function index(){
        $pemilih = Pemilih::all();
        foreach ($pemilih as $item) {
            if (Hasil::where('pemilih_id', $item->id)->exists()) {
                $item->voted = true;
            }else{
                $item->voted = false;
            }
        }
        return view('table.pemilih', ['pemilih' => $pemilih]);
    }
    public function tambah(){
        return view('form.form_pemilih');
    }

    public function insert(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'nisn' => 'required',
            'alamat' => 'required',
        ]);

        Pemilih::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'nisn' => $request->nisn,
            'alamat' => $request->alamat
        ]);
        return redirect('/pemilihan');
    }

    public function edit($id){
        $data = Pemilih::find($id);
        return view('form.edit_pemilih', ['data' => $data]);
    }

    public function update(Request $request, $id){
        $data =  Pemilih::find($id);
        $data->update($request->all());
        return redirect('/pemilihan');

    }
    public function delete($id){
        $data = pemilih::find($id);
        $data->delete();
        return redirect('/pemilihan');
    }



}
