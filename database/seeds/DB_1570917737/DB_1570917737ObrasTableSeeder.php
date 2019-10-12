<?php

use Illuminate\Database\Seeder;

class DB_1570917737ObrasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('obras')->delete();
        
        \DB::table('obras')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nombre' => 'La Llorona',
                'sinopsis' => 'unas lacras',
                'fecha_creacion' => '2019-10-12 20:07:35',
                'fecha_modificacion' => '2019-10-12 20:07:35',
            ),
        ));
        
        
    }
}