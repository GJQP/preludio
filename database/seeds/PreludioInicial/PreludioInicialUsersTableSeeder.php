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
                'remember_token' => '58mq3rYLBpf8A6LTQZDbyTu94X4cisQMxedqkfeqIKXp9DCzXke1OphduLcf',
                'settings' => '{"locale":"es"}',
                'created_at' => '2019-10-12 19:02:51',
                'updated_at' => '2019-10-12 19:05:24',
            ),
            1 => 
            array (
                'id' => 3,
                'role_id' => 3,
                'name' => 'Teatro Trasnocho',
                'email' => 'trasnocho@cultural.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$oPbTPGssUN0wnEGgUrdmtuoB34.6mg7fzCYp7Iqel2KhXe/a44U7G',
                'remember_token' => NULL,
                'settings' => '{"locale":"es"}',
                'created_at' => '2019-10-21 10:33:22',
                'updated_at' => '2019-10-21 10:33:22',
            ),
        ));
        
        
    }
}