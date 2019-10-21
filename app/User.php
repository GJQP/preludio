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
        'name', 'email', 'password',
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
     * Devuelve el establecimiento relacionado con este usuario
     */
    public function teatro()
    {
        // Unicamente devolvemos a quien sea teatro realmente
        if (!$this->esTeatro()) {
            return null;
        }

        return $this->belongsTo('App\Teatro');
    }

    /**
     * Determina si este usuario es teatrero
     */
    public function esTeatro()
    {
        return $this->role_id === self::ROL_TEATRO;
    }
}
