<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamentos extends Model
{
    protected $table='departamentos';
    protected $primaryKey='id_depto';
    public $timestamps=false;
    protected $fillable=[
    	'id_depto',
    	'depto'
    	
    ];
}
