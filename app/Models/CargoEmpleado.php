<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CargoEmpleado extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'cargo_id',
        'fecha_ini',
        'fecha_fin'
    ];
}
