<?php

use Illuminate\Database\Seeder;

class PreludioInicialRolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'display_name' => 'Administrator',
                'created_at' => '2019-10-12 19:01:45',
                'updated_at' => '2019-10-12 19:01:45',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'user',
                'display_name' => 'Espectador',
                'created_at' => '2019-10-12 19:01:45',
                'updated_at' => '2019-10-21 00:25:04',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'teatro',
                'display_name' => 'Teatro',
                'created_at' => '2019-10-19 15:22:00',
                'updated_at' => '2019-10-19 15:22:00',
            ),
        ));
        
        
    }
}