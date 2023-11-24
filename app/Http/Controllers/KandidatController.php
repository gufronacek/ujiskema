<?php

namespace App\Http\Controllers;

use App\Models\Kandidat;
use Illuminate\Http\Request;

class KandidatController extends Controller
{
    public function index()
    {
        $kandidat = Kandidat::all();
        return view('table.kandidat', ['kandidat' => $kandidat]);
    }
    // public function kandidat(){

    // }

    public function tambah()
    {
        return view('form.form_kandidat');
    }

    public function insert(Request $request){
        $request->validate([
            'nama_ketos' => 'required',
            'nama_waketos' => 'required',
            'image' => 'required',
            'visi' => 'required',
            'misi' => 'required',
        ]);
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('image'), $imageName);

        Kandidat::create([
            'nama_ketos' => $request->nama_ketos,
            'nama_waketos' => $request->nama_waketos,
            'image' => $imageName,
            'visi' => $request->visi,
            'misi' => $request->misi,
        ]);
        return redirect('/kandidat');
    }

    public function edit($id){
        $data = Kandidat::find($id);
        return view('form.edit_kandidat', ['data' => $data]);
    }

    public function update(Request $request, $id){
        $data = kandidat::find($id);
        $data->update($request->all());
        return redirect('/kandidat');
    }

    public function delete($id){
        $data = Kandidat::find($id);
        $data->delete();
        return redirect('/kandidat');
    }

    




}
