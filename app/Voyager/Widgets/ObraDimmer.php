<?php

namespace App\Voyager\Widgets;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Widgets\BaseDimmer;


class ObraDimmer extends BaseDimmer
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $count = \App\Obra::count();
        $string = trans_choice('Obra|Obras', $count);

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-book',
            'title'  => "{$count} {$string}",
            'text'   => __('Hay '.$count.' '.$string.' en tu base de datos. Puedes ingresar con el botón que se encuentra debajo para ver.'),
            'button' => [
                'text' => __('Ver todos'),
                'link' => route('voyager.obras.index'),
            ],
            'image' => asset('img/dimmers/obras.jpg'),
        ]));
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
0     */
    public function shouldBeDisplayed()
    {
        return Auth::user()->hasPermission('browse_obras');
    }
}
