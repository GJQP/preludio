<?php

use Illuminate\Database\Seeder;

class PreludioInicialDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $this->call(PreludioInicialDataTypesTableSeeder::class);
        $this->call(PreludioInicialDataRowsTableSeeder::class);
        $this->call(PreludioInicialMenusTableSeeder::class);
        $this->call(PreludioInicialMenuItemsTableSeeder::class);
        $this->call(PreludioInicialRolesTableSeeder::class);
        $this->call(PreludioInicialPermissionsTableSeeder::class);
        $this->call(PreludioInicialPermissionRoleTableSeeder::class);
        $this->call(PreludioInicialSettingsTableSeeder::class);
        $this->call(PreludioInicialTranslationsTableSeeder::class);
        $this->call(PreludioInicialUsersTableSeeder::class);
    }
}
