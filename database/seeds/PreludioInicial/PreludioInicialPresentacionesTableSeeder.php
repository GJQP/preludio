<?php

use Illuminate\Database\Seeder;

class PreludioInicialPresentacionesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('presentaciones')->delete();

        \DB::table('presentaciones')->insert([
            0 =>
                [
                    'id' => 4,
                    'obra_id' => 2,
                    'teatro_id' => 2,
                    'fecha_inicio' => '2019-10-23 00:00:00',
                    'fecha_fin' => '2019-10-31 00:00:00',
                    'poster' => NULL,
                    'imagenes' => '[]',
                    'reparto' => '<p>jbkbkjbjbjk</p>',
                    'fecha_creacion' => '2019-10-22 02:52:59',
                    'fecha_modificacion' => '2019-10-22 02:52:59',
                ],
        ]);


    }
}
