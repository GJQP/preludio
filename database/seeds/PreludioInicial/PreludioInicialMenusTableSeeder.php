<?php

use Illuminate\Database\Seeder;

class PreludioInicialMenusTableSeeder extends Seeder
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
            1 => 
            array (
                'id' => 2,
                'name' => 'teatro',
                'created_at' => '2019-10-21 01:07:41',
                'updated_at' => '2019-10-21 01:07:41',
            ),
        ));
        
        
    }
}