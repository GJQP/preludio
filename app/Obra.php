<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Obra extends Model
{
    const CREATED_AT = 'fecha_creacion';
    const UPDATED_AT = 'fecha_modificacion';

    /**
     * Devuelve todas las presentaciones de esta obra
     */
    public function presentaciones()
    {
        return $this->hasMany('App\Presentacion');
    }
}
