<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Presentacion extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'presentaciones';

    const CREATED_AT = 'fecha_creacion';
    const UPDATED_AT = 'fecha_modificacion';

    /**
     * Devuelve la obra relacionada
     */
    public function obra()
    {
        return $this->belongsTo('App\Obra');
    }

    /**
     * Devuelve el teatro relacionado
     */
    public function teatro()
    {
        return $this->belongsTo('App\Teatro');
    }
}
