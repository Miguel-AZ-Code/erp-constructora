<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bitacora extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'accion',
        'apartado',
        'afectado',
        'fecha_h',
        'ip',
    ];
}
