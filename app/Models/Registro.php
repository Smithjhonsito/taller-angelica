<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    use HasFactory;

    
    protected $table = "registros";
    protected $fillable = [
        'Nombre',
        'Apellido',
        'email',
        'Fecha',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];



}
