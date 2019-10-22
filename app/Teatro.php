<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Teatro extends Model
{
    const CREATED_AT = 'fecha_creacion';
    const UPDATED_AT = 'fecha_modificacion';

    protected $guarded = [];

    /*Accesos BREAD*/
    /**
     * @param $query
     * @return mixed
     */
    public function scopeTeatrosAsociados($query){
        if (Auth::user()->esTeatro()){
            return $query->where('id', Auth::user()->teatro? Auth::user()->teatro->id : 0);
        }
        else
            return $query;
    }

    /**
     * Relaciona campo user_id con Usuario explicitamente
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function userId(){
        return $this->belongsTo("App\User");
    }

    /**
     * Lista de usuarios a mostrar al relacionarlo a un teatro
     * @return mixed
     */
    public function userIdList(){
        $usuariosAsignados = DB::table('teatros')
            ->select('user_id')
            ->whereNotNull('user_id')
            ->pluck('user_id');

        return DB::table('users')->where('role_id',3)->whereNotIn('id',$usuariosAsignados)->get(['id','email']);
    }

    /**
     * Valor por defecto al relacionar un teatro
     * @return mixed
     */
    public static function userIdDefault(){
        return auth()->user()->id;
    }

    public function getUserIdReadAttribute(){
        return $this->user? $this->user->email : 'Vacío';
    }

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

    /**
     * Devuelve un array con la ruta de las imagenes a cargar
     * @param $value
     * @return array
     */
    public function getImagenesAtribute($value)
    {
        return $value ? array_map(function ($url) {
            return asset("storage/$url");
        }, json_decode($value)) : $value;
    }
}
