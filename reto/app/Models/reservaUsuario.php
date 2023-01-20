<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservaUsuario extends Model
{
    protected $fillable = [
        'productos',
        'estado',
        'id_user',
    ];
}
