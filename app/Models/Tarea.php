<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tarea extends Model
{
    use HasFactory;
    use SoftDeletes;
    //just here is what type of data
    //first is the column
    //this a array with all the fields
    protected $fillable=[
        'nombre',
        'descripcion',
        'finalizada',
        'fecha_limite',
        'urgencia',
    ];
}
