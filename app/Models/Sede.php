<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sede extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'sedes';
    protected $fillable = ['nombre','idColegio','colegio','direccion','correo','telefono']; 
}
