<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mesa extends Model
{
    use HasFactory;

    protected $table='mesas';
    protected $primaryKey='idMesa';
    protected $fillabed =  ['numero', 'capacidad', 'estado', 'eliminado'];
    public $timestamps = false;
}
