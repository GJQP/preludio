<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Teatro extends Model
{
    const CREATED_AT = 'fecha_creacion';
    const UPDATED_AT = 'fecha_modificacion';

    /*Accesos BREAD*/
    public function getActivoBrowseAttribute()
    {
        return $this->activo? "Activo":"Inactivo";
    }

    public function getActivoReadAttribute(){
        return $this->getActivoBrowseAttribute();
    }

    public function getFacebookReadAttribute(){
        return $this->getEmptyFieldReadAttribute($this->facebook);
    }

    public function getTwitterReadAttribute(){
        return $this->getEmptyFieldReadAttribute($this->twitter);
    }

    public function getInstagramReadAttribute(){
        return $this->getEmptyFieldReadAttribute($this->instagram);
    }

    public function getImagenesReadAttribute(){
        if($this->imagenes == "[]")
            return "Vacío";
    }

    /**
     * Mensaje a devolver si está vacío el campo
     * @param null $field Campo a verificar si es vacio o nulo
     * @return string|null
     */
    private function getEmptyFieldReadAttribute($field){
        return $field?? "Vacío";
    }

    /**
     * Devuelve el Usuario Teatro de este establecimiento
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Devuelve las presentaciones de este establecimiento
     */
    public function presentaciones()
    {
        return $this->hasMany('App\Presentacion');
    }

    /**
     * Elimina el establecimiento y su usuario relacionado
     * de este teatro
     * @return bool|null
     * @throws \Exception
     */
    public function delete()
    {
        DB::beginTransaction();

        // Se tiene que eliminar primero el registro hijo (este),
        // antes de poder eliminar el usuario (Hay un constraint, por tanto
        // debemos evitar un Intergity Error
        $usuarioRelacionado = $this->user;

        // Eliminamos las presentaciones asociadas
        $this->presentaciones()->delete();

        // Ya no somos dependencias, podemos eliminar como siempre
        $resultado = parent::delete();

        // Ya el usuario no tiene relacion, lo podemos eliminar
        $usuarioRelacionado->delete();

        DB::commit();

        return $resultado;
    }
}
