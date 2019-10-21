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
                'remember_token' => 'EzbcthUKmDd0Dk7DubIB6pNeS0RnVbD0N5pEDEdrYenhCBqFevEbzcw2EPJM',
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
            2 => 
            array (
                'id' => 4,
                'role_id' => 1,
                'name' => 'g',
                'email' => 'g@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$xsgiOm.hnWZG5Kop8ffy.uW7jY2alt6tI./5Yeyu/IG6WUsYSGh0i',
                'remember_token' => NULL,
                'settings' => '{"locale":"es"}',
                'created_at' => '2019-10-20 23:15:20',
                'updated_at' => '2019-10-21 00:54:38',
            ),
            3 => 
            array (
                'id' => 5,
                'role_id' => NULL,
                'name' => 'Gus',
                'email' => 'gjquintanap@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$D9TowjGn7pjTkmv4yJXHVOphxzXZywGITfkLQpAsvPj1MZ5F7HDDC',
                'remember_token' => NULL,
                'settings' => '{"locale":"es"}',
                'created_at' => '2019-10-21 00:15:20',
                'updated_at' => '2019-10-21 00:15:20',
            ),
        ));
        
        
    }
}