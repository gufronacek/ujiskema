<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hasil extends Model
{
    use HasFactory;
    protected $table = 'hasils';
    protected $guarded = ['id'];

     public function kandidat(){
        return $this->belongsTo(Kandidat::class);
     }
     public function Pemilih(){
        return $this->belongsTo(Pemilih::class);
     }
}
