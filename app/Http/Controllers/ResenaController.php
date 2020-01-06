<?php


namespace App\Http\Controllers;

use App\Resena;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;


class ResenaController extends Controller
{
    public function store(Request $request)
    {
        abort_unless(Auth::check(), 403, 'Solo usuarios autenticados pueden publicar reseñas.');
        $data = $request->validate([
            'stars' => 'required|min:0|max:5',
            'comentario' => 'nullable|string|max:255',
            'tipo_objeto' => 'regex:/presentacion|teatro/i',
            'id_rel' => 'required|integer|min:0'
        ]);

        $resena = new Resena();
        $resena->calificacion = $data['stars'];
        $resena->comentario = $data['comentario'];
        $resena->user = $request->user();
        if ($data['tipo_objeto'] === 'presentacion')
        {
            $resena->presentacion_id = $data['id_rel'];
        } else
        {
            $resena->teatro_id = $data['id_rel'];
        }

        $resena->save();

        return Redirect::to($request->headers->get('referer'));
    }
}