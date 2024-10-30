<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

     protected $primaryKey = 'id';

    protected $fillable = [
        'nombre',
        'especie',
        'raza',
        'edad',
        'peso',
        'sexo',
    ];

}
