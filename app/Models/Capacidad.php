<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Capacidad extends Model
{
    use HasFactory;

    protected $table='capacidad';
    protected $primaryKey='id';
    protected $fillable = ['nombre', 'dni', 'telefono'];
    public $timestamps = false;



}
