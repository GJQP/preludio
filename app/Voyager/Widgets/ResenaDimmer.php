<?php


namespace App\Voyager\Widgets;


use TCG\Voyager\Widgets\BaseDimmer;

class ResenaDimmer extends BaseDimmer
{
    public function run()
    {
        $count = \App\Resena::count();
        $string = trans_choice('Reseña|Reseñas', $count);

        return view('voyager::dimmer', array_merge($this->config, [
            'icon' => 'voyager-file-text',
            'title' => "{$count} {$string}",
            'text' => __('Hay ' . $count . ' ' . $string . ' en tu base de datos. Puedes ingresar con el botón que se encuentra debajo para ver.'),
            'button' => [
                'text' => __('Ver todos'),
                'link' => route('voyager.resenas.index'),
            ],
            'image' => asset('img/dimmers/reseña.jpg'),
        ]));
    }
}
