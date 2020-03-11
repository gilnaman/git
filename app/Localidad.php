<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Localidad extends Model
{
    protected $table='localidades';

  protected $primaryKey='id_localidad';

  public $timestamps=false;


  protected $Fillable=[
  	'id_localidad',
  	'localidad',
  	'cp'
  ];
}
