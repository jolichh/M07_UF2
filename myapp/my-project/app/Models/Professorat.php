<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professorat extends Model
{
    use HasFactory;

    protected $table = 'professorats';

    //indica les dades que es volen omplir amb $fillable
    protected $fillable = [
        //las otras (id, timestamps) no las gestionamos nosotros
        'name',
        'surname',
        'email',
    ];

    protected $hidden = [];
}
