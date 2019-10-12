<?php

use Illuminate\Database\Seeder;

class DB_1570917737RolesTableSeeder extends Seeder
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
                'display_name' => 'Normal User',
                'created_at' => '2019-10-12 19:01:45',
                'updated_at' => '2019-10-12 19:01:45',
            ),
        ));
        
        
    }
}