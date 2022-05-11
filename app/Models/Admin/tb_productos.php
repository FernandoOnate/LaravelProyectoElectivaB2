<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_productos extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['nombre','precio','categoria','descripcion','stock','imagen'];
}
