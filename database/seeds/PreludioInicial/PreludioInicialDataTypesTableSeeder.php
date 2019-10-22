<?php

use Illuminate\Database\Seeder;

class PreludioInicialDataTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('data_types')->delete();
        
        \DB::table('data_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'users',
                'slug' => 'users',
                'display_name_singular' => 'User',
                'display_name_plural' => 'Users',
                'icon' => 'voyager-person',
                'model_name' => 'TCG\\Voyager\\Models\\User',
                'policy_name' => 'TCG\\Voyager\\Policies\\UserPolicy',
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController',
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"desc","default_search_key":null,"scope":null}',
                'created_at' => '2019-10-12 19:01:42',
                'updated_at' => '2019-10-21 00:21:49',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'menus',
                'slug' => 'menus',
                'display_name_singular' => 'Menu',
                'display_name_plural' => 'Menus',
                'icon' => 'voyager-list',
                'model_name' => 'TCG\\Voyager\\Models\\Menu',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2019-10-12 19:01:43',
                'updated_at' => '2019-10-12 19:01:43',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'roles',
                'slug' => 'roles',
                'display_name_singular' => 'Role',
                'display_name_plural' => 'Roles',
                'icon' => 'voyager-lock',
                'model_name' => 'TCG\\Voyager\\Models\\Role',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"desc","default_search_key":null,"scope":null}',
                'created_at' => '2019-10-12 19:01:43',
                'updated_at' => '2019-10-20 02:49:15',
            ),
            3 => 
            array (
                'id' => 6,
                'name' => 'teatros',
                'slug' => 'teatros',
                'display_name_singular' => 'Teatro',
                'display_name_plural' => 'Teatros',
                'icon' => 'voyager-shop',
                'model_name' => 'App\\Teatro',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":"teatrosAsociados"}',
                'created_at' => '2019-10-12 19:22:21',
                'updated_at' => '2019-10-22 00:33:32',
            ),
            4 => 
            array (
                'id' => 7,
                'name' => 'obras',
                'slug' => 'obras',
                'display_name_singular' => 'Obra',
                'display_name_plural' => 'Obras',
                'icon' => 'voyager-book',
                'model_name' => 'App\\Obra',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2019-10-12 19:25:46',
                'updated_at' => '2019-10-21 00:29:45',
            ),
            5 => 
            array (
                'id' => 8,
                'name' => 'presentaciones',
                'slug' => 'presentaciones',
                'display_name_singular' => 'Presentación',
                'display_name_plural' => 'Presentaciones',
                'icon' => 'voyager-ticket',
                'model_name' => 'App\\Presentacion',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":"presentacionesAsociadas"}',
                'created_at' => '2019-10-12 19:27:28',
                'updated_at' => '2019-10-21 00:52:33',
            ),
        ));
        
        
    }
}