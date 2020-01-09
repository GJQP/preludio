<?php

namespace App\Http\Controllers\Auth;

use App\Teatro;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255','regex:/^[a-zA-Zñ]+(([\',. -][a-zA-Z\ ñ])?[a-zA-Zñ]*)*$/'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'nombre' => ['sometimes','required', 'string', 'max:255','regex:/^[a-zA-Zñ]+(([\',. -][a-zA-Z\ ñ])?[a-zA-Zñ]*)*$/'],
            'telefono' => ['sometimes','required','regex:/^0?(424|414|412|416|212)[0-9]{7}/'],
            'rif' => ['sometimes','required','unique:teatros'],
            'direccion' => ['sometimes','required','min:10']
        ],
            $this->messages()
        )
        ;
    }

    public function messages()
    {
        return [
            'name.required' => 'El nombre del usuario es requerido',
            'name.regex' => 'El nombre no puede tener caracteres numéricos o especiales',
            'email.required'  => 'El correo del usuario es requerido',
            'email.email' => 'Debe ingresar un correo válido',
            'password.required' => 'La contraseña es requerida',
            'password.min' => 'La contraseña debe tener más de 8 caracteres',
            'password.confirmed' => 'Las contraseñas no coinciden',
            'nombre.required' => 'El nombre del teatro es requerido',
            'nombre.regex' => 'El nombre no puede tener caracteres numéricos o especiales',
            'telefono.required' => 'El número de teléfono es requerido',
            'telefono.regex' => 'Debe ingresar un número de teléfono válido',
            'rif.required' => 'El RIF es obligatorio',
            'rif.unique' => 'El RIF ingresado ya tiene un teatro asociado',
            'direccion.required' => 'La dirección es un campo requerido',
            'direccion.min' => 'La dirección debe contener más de 10 caracteres'
        ];
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $rol = \Arr::has($data,['nombre'])? User::ROL_TEATRO : NULL;

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role_id' => $rol
        ]);

        if ($rol == User::ROL_TEATRO) {
            $teatro = new Teatro([
                'nombre' => $data['nombre'],
                'telefono' => $data['telefono'],
                'rif' => $data['rif'],
                'direccion' => $data['direccion']
            ]);
            $user->teatro()->save($teatro);
        }


        return $user;
    }
}
