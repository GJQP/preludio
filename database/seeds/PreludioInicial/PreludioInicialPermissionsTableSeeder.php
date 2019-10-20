<?php

use Illuminate\Database\Seeder;

class PreludioInicialPermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'created_at' => '2019-10-12 19:01:45',
                'updated_at' => '2019-10-12 19:01:45',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'created_at' => '2019-10-12 19:01:45',
                'updated_at' => '2019-10-12 19:01:45',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'created_at' => '2019-10-12 19:01:45',
                'updated_at' => '2019-10-12 19:01:45',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'created_at' => '2019-10-12 19:01:45',
                'updated_at' => '2019-10-12 19:01:45',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'created_at' => '2019-10-12 19:01:45',
                'updated_at' => '2019-10-12 19:01:45',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'created_at' => '2019-10-12 19:01:45',
                'updated_at' => '2019-10-12 19:01:45',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'created_at' => '2019-10-12 19:01:45',
                'updated_at' => '2019-10-12 19:01:45',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'created_at' => '2019-10-12 19:01:45',
                'updated_at' => '2019-10-12 19:01:45',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'created_at' => '2019-10-12 19:01:46',
                'updated_at' => '2019-10-12 19:01:46',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'created_at' => '2019-10-12 19:01:46',
                'updated_at' => '2019-10-12 19:01:46',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'created_at' => '2019-10-12 19:01:46',
                'updated_at' => '2019-10-12 19:01:46',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'created_at' => '2019-10-12 19:01:46',
                'updated_at' => '2019-10-12 19:01:46',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'created_at' => '2019-10-12 19:01:46',
                'updated_at' => '2019-10-12 19:01:46',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'created_at' => '2019-10-12 19:01:46',
                'updated_at' => '2019-10-12 19:01:46',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'created_at' => '2019-10-12 19:01:46',
                'updated_at' => '2019-10-12 19:01:46',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'created_at' => '2019-10-12 19:01:46',
                'updated_at' => '2019-10-12 19:01:46',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'created_at' => '2019-10-12 19:01:46',
                'updated_at' => '2019-10-12 19:01:46',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'created_at' => '2019-10-12 19:01:46',
                'updated_at' => '2019-10-12 19:01:46',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'created_at' => '2019-10-12 19:01:46',
                'updated_at' => '2019-10-12 19:01:46',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'created_at' => '2019-10-12 19:01:46',
                'updated_at' => '2019-10-12 19:01:46',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'created_at' => '2019-10-12 19:01:46',
                'updated_at' => '2019-10-12 19:01:46',
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'created_at' => '2019-10-12 19:01:46',
                'updated_at' => '2019-10-12 19:01:46',
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'created_at' => '2019-10-12 19:01:46',
                'updated_at' => '2019-10-12 19:01:46',
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'created_at' => '2019-10-12 19:01:46',
                'updated_at' => '2019-10-12 19:01:46',
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'created_at' => '2019-10-12 19:01:46',
                'updated_at' => '2019-10-12 19:01:46',
            ),
            25 => 
            array (
                'id' => 26,
                'key' => 'browse_hooks',
                'table_name' => NULL,
                'created_at' => '2019-10-12 19:02:03',
                'updated_at' => '2019-10-12 19:02:03',
            ),
            26 => 
            array (
                'id' => 27,
                'key' => 'browse_teatros',
                'table_name' => 'teatros',
                'created_at' => '2019-10-12 19:22:21',
                'updated_at' => '2019-10-12 19:22:21',
            ),
            27 => 
            array (
                'id' => 28,
                'key' => 'read_teatros',
                'table_name' => 'teatros',
                'created_at' => '2019-10-12 19:22:21',
                'updated_at' => '2019-10-12 19:22:21',
            ),
            28 => 
            array (
                'id' => 29,
                'key' => 'edit_teatros',
                'table_name' => 'teatros',
                'created_at' => '2019-10-12 19:22:21',
                'updated_at' => '2019-10-12 19:22:21',
            ),
            29 => 
            array (
                'id' => 30,
                'key' => 'add_teatros',
                'table_name' => 'teatros',
                'created_at' => '2019-10-12 19:22:22',
                'updated_at' => '2019-10-12 19:22:22',
            ),
            30 => 
            array (
                'id' => 31,
                'key' => 'delete_teatros',
                'table_name' => 'teatros',
                'created_at' => '2019-10-12 19:22:22',
                'updated_at' => '2019-10-12 19:22:22',
            ),
            31 => 
            array (
                'id' => 32,
                'key' => 'browse_obras',
                'table_name' => 'obras',
                'created_at' => '2019-10-12 19:25:46',
                'updated_at' => '2019-10-12 19:25:46',
            ),
            32 => 
            array (
                'id' => 33,
                'key' => 'read_obras',
                'table_name' => 'obras',
                'created_at' => '2019-10-12 19:25:46',
                'updated_at' => '2019-10-12 19:25:46',
            ),
            33 => 
            array (
                'id' => 34,
                'key' => 'edit_obras',
                'table_name' => 'obras',
                'created_at' => '2019-10-12 19:25:46',
                'updated_at' => '2019-10-12 19:25:46',
            ),
            34 => 
            array (
                'id' => 35,
                'key' => 'add_obras',
                'table_name' => 'obras',
                'created_at' => '2019-10-12 19:25:46',
                'updated_at' => '2019-10-12 19:25:46',
            ),
            35 => 
            array (
                'id' => 36,
                'key' => 'delete_obras',
                'table_name' => 'obras',
                'created_at' => '2019-10-12 19:25:46',
                'updated_at' => '2019-10-12 19:25:46',
            ),
            36 => 
            array (
                'id' => 37,
                'key' => 'browse_presentaciones',
                'table_name' => 'presentaciones',
                'created_at' => '2019-10-12 19:27:28',
                'updated_at' => '2019-10-12 19:27:28',
            ),
            37 => 
            array (
                'id' => 38,
                'key' => 'read_presentaciones',
                'table_name' => 'presentaciones',
                'created_at' => '2019-10-12 19:27:28',
                'updated_at' => '2019-10-12 19:27:28',
            ),
            38 => 
            array (
                'id' => 39,
                'key' => 'edit_presentaciones',
                'table_name' => 'presentaciones',
                'created_at' => '2019-10-12 19:27:28',
                'updated_at' => '2019-10-12 19:27:28',
            ),
            39 => 
            array (
                'id' => 40,
                'key' => 'add_presentaciones',
                'table_name' => 'presentaciones',
                'created_at' => '2019-10-12 19:27:28',
                'updated_at' => '2019-10-12 19:27:28',
            ),
            40 => 
            array (
                'id' => 41,
                'key' => 'delete_presentaciones',
                'table_name' => 'presentaciones',
                'created_at' => '2019-10-12 19:27:28',
                'updated_at' => '2019-10-12 19:27:28',
            ),
        ));
        
        
    }
}