<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kandidat extends Model
{
    use HasFactory;
    protected $table = 'kandidats';
    protected $guarded = ['id'];
    public function hasil(){
       return $this->hasMany(Hasil::class);
    }
}
