<?php

use Illuminate\Database\Seeder;

class DB_1570917737DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $this->call(DB_1570917737DataRowsTableSeeder::class);
        $this->call(DB_1570917737DataTypesTableSeeder::class);
        $this->call(DB_1570917737MenuItemsTableSeeder::class);
        $this->call(DB_1570917737MenusTableSeeder::class);
        $this->call(DB_1570917737ObrasTableSeeder::class);
        $this->call(DB_1570917737PermissionRoleTableSeeder::class);
        $this->call(DB_1570917737PermissionsTableSeeder::class);
        $this->call(DB_1570917737PresentacionesTableSeeder::class);
        $this->call(DB_1570917737RolesTableSeeder::class);
        $this->call(DB_1570917737SettingsTableSeeder::class);
        $this->call(DB_1570917737TeatrosTableSeeder::class);
        $this->call(DB_1570917737TranslationsTableSeeder::class);
        $this->call(DB_1570917737UsersTableSeeder::class);
    }
}
