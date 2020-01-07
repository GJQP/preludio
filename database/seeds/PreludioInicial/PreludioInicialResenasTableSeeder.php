<?php

use Illuminate\Database\Seeder;

class PreludioInicialResenasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('resenas')->delete();

        \DB::table('resenas')->insert([
            0 =>
                [
                    'id' => 1,
                    'created_at' => '2020-01-05 23:30:00',
                    'updated_at' => '2020-01-05 23:30:00',
                    'teatro_id' => 2,
                    'presentacion_id' => NULL,
                    'user_id' => 1,
                    'calificacion' => 4,
                    'comentario' => NULL,
                    'numero_reportes' => 0,
                ],
            1 =>
                [
                    'id' => 3,
                    'created_at' => '2020-01-06 19:35:27',
                    'updated_at' => '2020-01-06 19:35:27',
                    'teatro_id' => NULL,
                    'presentacion_id' => 4,
                    'user_id' => 1,
                    'calificacion' => 5,
                    'comentario' => 'Me encantó esta presentación!!!',
                    'numero_reportes' => 0,
                ],
        ]);


    }
}
