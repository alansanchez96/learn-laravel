<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    // $fillable está para solo rellenar los registros con solo estas columnas
    protected $fillable = ['nombre', 'descripcion', 'categoria'];

    // $guarded está solo para ignorar la tabla mencionada
    /* protected $guarded = ['tabla_a_ignorar'] */
}
