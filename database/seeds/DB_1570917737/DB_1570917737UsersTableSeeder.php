<?php

use Illuminate\Database\Seeder;

class DB_1570917737UsersTableSeeder extends Seeder
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
                'avatar' => 'users/October2019/AtuSvQWrnQTuz45FA7Tp.jpg',
                'email_verified_at' => NULL,
                'password' => '$2y$10$qNaI4jfkBCZgaT6LqpqeRuU/Seb91YHste0IDbd7KKIzoIf11/t3S',
                'remember_token' => '39yfFd1OrRrQutNZdzOKndnbH8oyprQEUDN2JpLbRRaEbr7psTTTi9CGPiDK',
                'settings' => '{"locale":"es"}',
                'created_at' => '2019-10-12 19:02:51',
                'updated_at' => '2019-10-12 19:05:24',
            ),
        ));
        
        
    }
}