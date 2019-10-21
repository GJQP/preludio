<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
