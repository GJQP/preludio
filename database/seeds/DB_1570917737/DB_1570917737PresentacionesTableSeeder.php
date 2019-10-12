<?php

use Illuminate\Database\Seeder;

class DB_1570917737PresentacionesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('presentaciones')->delete();
        
        \DB::table('presentaciones')->insert(array (
            0 => 
            array (
                'id' => 2,
                'obra_id' => 1,
                'teatro_id' => 1,
                'fecha_inicio' => '2019-10-12 00:00:00',
                'fecha_fin' => '2019-10-25 00:00:00',
                'poster' => 'presentaciones/October2019/6qXbxLhrgLHhg0QTbxH9.jpg',
                'reparto' => 'jjjjjjjjjj',
                'fecha_creacion' => '2019-10-12 20:12:21',
                'fecha_modificacion' => '2019-10-12 20:12:21',
            ),
        ));
        
        
    }
}