<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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

    /*Accesos BREAD*/
    public function scopePresentacionesAsociadas($query){
        if (Auth::user()->esTeatro()){
            return $query->where('teatro_id', Auth::user()->teatro->id);
        }
        else
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
