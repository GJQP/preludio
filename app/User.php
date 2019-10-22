<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends \TCG\Voyager\Models\User
{
    use Notifiable;

    // Por el seed estamos forzando este ID al rol.
    const ROL_TEATRO = 3;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Atributo en memoria sobre el estatus de Teatro del User,
     * para evitar hacer queries siempre (mediante $this->role)
     * TODO: Esto es necesario?
     *
     * @var null|boolean
     */
    protected $esTeatro = null;

    /**
     * Devuelve el establecimiento relacionado con este usuario
     */
    public function teatro()
    {
        return $this->hasOne('App\Teatro');
    }

    /**
     * Determina si este usuario es teatrero
     * @return boolean
     */
    public function esTeatro()
    {
        return $this->role_id === self::ROL_TEATRO;
    }

    public function delete()
    {
        // Corroboramos que el usuario sea un Teatro, y que tenga
        // realmente un teatro asociado
        if ($this->esTeatro() && $this->teatro()->exists())
        {
            // Eliminamos el Teatro asociado para que esta fila no sea
            // dependencia.
            $this->teatro()->delete();
        }
        return parent::delete();
    }
}
