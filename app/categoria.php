<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    // protected $table = 'categorias';
    // protected $primaryKey = 'id';
    protected $fillable = ['nombre','descripcion','condicion'];
}
