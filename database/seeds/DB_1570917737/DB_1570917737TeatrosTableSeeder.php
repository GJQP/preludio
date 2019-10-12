<?php

use Illuminate\Database\Seeder;

class DB_1570917737TeatrosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('teatros')->delete();
        
        \DB::table('teatros')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nombre' => 'Trasnocho Cultural',
                'rif' => 'V061364826',
                'direccion' => '12 ford st, apt. 1c',
                'telefono' => '4143312671',
                'facebook' => 'fa',
                'twitter' => 'twt',
                'instagram' => 'aaa',
                'fecha_creacion' => '2019-10-12 00:00:00',
                'fecha_modificacion' => '2019-10-12 00:00:00',
            ),
        ));
        
        
    }
}