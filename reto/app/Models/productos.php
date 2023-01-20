<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productos extends Model
{
 
    //solo lo que voy a modificar            
    protected $fillable = [
        'titulo',
        'autor',
        'precio',
        'descripcion',
        'url_img',
        'estado'
    ];
}
