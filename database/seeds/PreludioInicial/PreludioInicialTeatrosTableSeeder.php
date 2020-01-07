<?php

use Illuminate\Database\Seeder;

class PreludioInicialTeatrosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('teatros')->delete();

        \DB::table('teatros')->insert([
            0 =>
                [
                    'id' => 2,
                    'user_id' => 3,
                    'nombre' => 'Trasnocho',
                    'rif' => '12345678-9',
                    'direccion' => 'Trasnocho',
                    'telefono' => '0414-2599251',
                    'facebook' => NULL,
                    'twitter' => NULL,
                    'instagram' => NULL,
                    'imagenes' => '["teatros\\/October2019\\/KaVbpSRJWW9HaKaSMNSk.png"]',
                    'activo' => 1,
                    'fecha_creacion' => '2019-10-21 10:34:19',
                    'fecha_modificacion' => '2020-01-05 23:26:04',
                ],
        ]);


    }
}
