<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teatro extends Model
{
    const CREATED_AT = 'fecha_creacion';
    const UPDATED_AT = 'fecha_modificacion';

    /**
     * Devuelve el Usuario Teatro de este establecimiento
     */
    public function user()
    {
        return $this->hasOne('App\User');
    }

    /**
     * Devuelve las presentaciones de este establecimiento
     */
    public function presentaciones()
    {
        return $this->hasMany('App\Presentacion');
    }
}
