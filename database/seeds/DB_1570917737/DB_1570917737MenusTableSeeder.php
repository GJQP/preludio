<?php

use Illuminate\Database\Seeder;

class DB_1570917737MenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menus')->delete();
        
        \DB::table('menus')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'created_at' => '2019-10-12 19:01:44',
                'updated_at' => '2019-10-12 19:01:44',
            ),
        ));
        
        
    }
}