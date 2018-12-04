<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contacto extends Model
{
    //
    protected $table="contactos";
    protected $fillable=["telefono","nombre","email","telefono2"];
}
