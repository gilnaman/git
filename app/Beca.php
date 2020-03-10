<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beca extends Model
{
    //
    protected $table='becas';
    protected $primaryKey='id_beca';

    public $timestamps=false;
    public $incrementing=false;

    public $fillable=[
    'id_beca',
    'beca',
    ];
}
