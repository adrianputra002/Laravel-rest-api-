<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mahasiswa extends Model
{

    use SoftDeletes;
    use HasFactory;
    protected $table='mahasiswa';
    protected $fillable=[
        'username','address'
    ];
    protected $hidden=[];
}
