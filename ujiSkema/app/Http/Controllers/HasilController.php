<?php

namespace App\Http\Controllers;

use App\Models\Hasil;
use App\Models\Kandidat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\Return_;

class HasilController extends Controller
{
    public function index()
    {
        $hasil = Kandidat::get();
        return view('table.hasil', ['hasil' => $hasil]);
    }
    public function vote($id){
        $pemilih = Auth::guard('pemilih')->id();
        if (Hasil::where('pemilih_id', $pemilih)->exists()) {
            return redirect('/pemilih')->with('error' , 'anda telah  melakukan vote');
        };
        // $sudahVote = Hasil::where('pemilih_id', $pemilih)->exists();


        Hasil::create([
            'pemilih_id' => $pemilih,
            'kandidat_id' => $id
        ]);
        return redirect('/pemilih')->with('succes' , 'terimakasih telah vote');
    }
}
