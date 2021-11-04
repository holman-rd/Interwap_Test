<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    protected $table = 'vehiculo';
    protected $primaryKey='id_vehiculo';
    public $timestamps =false;
    
    protected $fillable=['placa', 'telefono', 'color','estado'];
    protected $guarded=[];
}
