<?php

use Illuminate\Database\Seeder;

class PreludioInicialFuncionesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('funciones')->delete();

        \DB::table('funciones')->insert([
            0 =>
                [
                    'id' => 1,
                    'created_at' => '2020-01-05 23:46:56',
                    'updated_at' => '2020-01-05 19:47:01',
                    'presentacion_id' => 4,
                    'fecha_presentacion' => '2020-01-06',
                    'hora_inicio' => '20:00:00',
                ],
            1 =>
                [
                    'id' => 2,
                    'created_at' => '2020-01-05 20:59:48',
                    'updated_at' => '2020-01-05 20:59:57',
                    'presentacion_id' => 4,
                    'fecha_presentacion' => '2020-01-05',
                    'hora_inicio' => '16:00:00',
                ],
            2 =>
                [
                    'id' => 3,
                    'created_at' => '2020-01-05 21:00:20',
                    'updated_at' => '2020-01-05 21:00:27',
                    'presentacion_id' => 4,
                    'fecha_presentacion' => '2020-01-07',
                    'hora_inicio' => '03:00:00',
                ],
            3 =>
                [
                    'id' => 4,
                    'created_at' => '2020-01-05 21:01:07',
                    'updated_at' => '2020-01-05 21:01:09',
                    'presentacion_id' => 4,
                    'fecha_presentacion' => '2020-01-06',
                    'hora_inicio' => '22:00:00',
                ],
        ]);


    }
}
