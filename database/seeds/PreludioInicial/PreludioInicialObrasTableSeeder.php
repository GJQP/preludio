<?php

use Illuminate\Database\Seeder;

class PreludioInicialObrasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('obras')->delete();

        \DB::table('obras')->insert([
            0 =>
                [
                    'id' => 2,
                    'nombre' => 'Romero y Julieti',
                    'sinopsis' => 'todosaodasdaskjdas',
                    'fecha_creacion' => '2019-10-22 02:49:27',
                    'fecha_modificacion' => '2019-10-22 02:49:27',
                ],
        ]);


    }
}
