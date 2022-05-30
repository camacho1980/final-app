<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mensaje extends Model
{
    use HasFactory;
    protected $fillable = ['name','email','phone','message'];

}

// permiten protegerse en caso de que un usuario 'malicioso' haya modificado los campos del formulario para incluir campos que existían.