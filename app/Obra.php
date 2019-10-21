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

    /**
     * Elimina la instancia de la obra, y consigo elimina todas las presentaciones que
     * se tengan de la obra
     * @return bool|null
     * @throws \Exception
     */
    public function delete()
    {
        DB::beginTransaction();

        Presentacion::where('obra_id', $this->id)->delete();

        $result = parent::delete();

        DB::commit();

        return $result;
    }


}
