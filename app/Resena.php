<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resena extends Model
{
    protected $casts = [
        'numero_reportes' => 'integer'
    ];

    /**
     * Devuelve la presentacion relacionada a esta reseña
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function presentacion()
    {
        return $this->belongsTo('App\Presentacion');
    }

    /**
     * Devuelve el teatro relacionado a esta reseña
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function teatro()
    {
        return $this->belongsTo('App\Teatro');
    }

    /**
     * Devuelve el usuario que hizo esta reseña
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Acción de reportar una reseña
     * @throws \Exception
     */
    public function reportar()
    {
        $this->reportes++;
        if ($this->reportes >= 5)
        {
            $this->delete();
        } else
        {
            $this->save();
        }
    }
}
