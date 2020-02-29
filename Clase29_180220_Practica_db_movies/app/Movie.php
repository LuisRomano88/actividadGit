<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    //public $table= "movies";
    //public $primaryKey = "id";
    //public $timestamps = true;
    public $guarded= []; //indicamos que todos los campos de la tabla movies se pueden escribir. 
    //Si queremos indicar lo contrario colocamos el nombre del campo entre comillas dentro del array

}
