<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_clientes extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['nombre', 'apellidos', 'telefono', 'correo', 'codigo', 'clave'];
}
