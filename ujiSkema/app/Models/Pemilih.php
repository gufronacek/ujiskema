<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Pemilih extends Authenticatable
{
    use HasFactory;
    protected $table = 'pemilihs';
    protected $guarded = ['id'];
}
