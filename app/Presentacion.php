<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use TCG\Voyager\Voyager;

class Presentacion extends Model
{
    /**
     * Tabla asociada al modelo
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

    /**
     * Devuelve las funciones relacionadas
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function funciones()
    {
        return $this->hasMany('App\Funcion')->orderBy('fecha_presentacion', 'asc');
    }

    public function funcionesHoy()
    {
        return $this->funciones()
            ->where('fecha_presentacion', '=', Carbon::today()->toDateString())
            ->orderBy('hora_inicio', 'asc')
            ->get();
    }

    /**
     * Devuelve las reseñas relacionadas
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function resenas()
    {
        return $this->hasMany('App\Resena');
    }

    /**
     * Devuelve un vector con las url de las imagenes del Teatro
     * @param $value
     * @return array
     */
    public function getImagenesAttribute($value)
    {
        return $value ? array_map(function ($url) {
            return asset("storage/$url");
        }, json_decode($value)) : $value;
    }

    /*Accesos BREAD*/
    public function scopePresentacionesAsociadas($query){
        if (Auth::user()->esTeatro()){
            return $query->where('teatro_id', Auth::user()->teatro? Auth::user()->teatro->id : 0);
        } else
            return $query;
    }

    /**
     * Relaciona campo teatro_id con Usuario explicitamente
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function teatroId(){
        return $this->belongsTo("App\Teatro");
    }

    /**
     * Lista de usuarios a mostrar al relacionarlo a un teatro
     * @return mixed
     */
    public function teatroIdList(){
        if(Auth::user()->esTeatro())
            return DB::table('teatros')->where('user_id', Auth::user()->id)->get();
        else
            return DB::table('teatros')->get();
    }

    /**
     * Valor por defecto al relacionar un teatro
     * @return mixed
     */
    public static function teatroIdDefault(){
        return Auth::user()->teatro->id;
    }
}
