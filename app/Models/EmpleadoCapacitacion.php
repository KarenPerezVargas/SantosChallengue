<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpleadoCapacitacion extends Model
{
    use HasFactory;
    protected $table='emple_capa';
    protected $primaryKey='idEC';
    protected $fillable = ['idemple', 'idcapa'];
    public $timestamps = false;
}
