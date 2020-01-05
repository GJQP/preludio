<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcion extends Model
{
    protected $table = 'funciones';

    protected $casts = [
        'fecha_presentacion' => 'date'
    ];

    protected $dates = ['created_at', 'updated_at', 'fecha_presentacion'];

    /**
     * Devuelve la presentacion relacionada a esta funcion
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function presentacion()
    {
        return $this->belongsTo('presentacion');
    }
}
