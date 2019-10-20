<?php

use Illuminate\Database\Seeder;

class PreludioInicialUsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'role_id' => 1,
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$qNaI4jfkBCZgaT6LqpqeRuU/Seb91YHste0IDbd7KKIzoIf11/t3S',
                'remember_token' => 'DQXfvXhHy6MEPnq12dDrrPa26FIdXfWodH34udAydFb2bQ0wNx8TPS6E9f8a',
                'settings' => '{"locale":"es"}',
                'created_at' => '2019-10-12 19:02:51',
                'updated_at' => '2019-10-12 19:05:24',
            ),
            1 => 
            array (
                'id' => 2,
                'role_id' => 3,
                'name' => 'Teatro Trasnocho',
                'email' => 'trasnocho@cultural.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$j7UIkGYE/TbNYLb1O9r7v.RkhGLVrdlaPbRI8EpBDfYkflEqXdY22',
                'remember_token' => NULL,
                'settings' => '{"locale":"es"}',
                'created_at' => '2019-10-19 15:22:59',
                'updated_at' => '2019-10-19 15:22:59',
            ),
        ));
        
        
    }
}