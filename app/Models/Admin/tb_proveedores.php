<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_proveedores extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['nombre', 'nit', 'correo', 'insumo', 'telefono'];
}
