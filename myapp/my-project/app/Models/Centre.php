<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Centre extends Model
{
    use HasFactory;

    protected $table = 'centres';

    //indica les dades que es volen omplir amb $fillable
    protected $fillable = [
        //las otras (id, timestamps) no las gestionamos nosotros
        'name',
        'address',
        'cp',
        'city'
    ];

    protected $hidden = [];
}
