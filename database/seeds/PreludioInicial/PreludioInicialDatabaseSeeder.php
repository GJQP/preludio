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
        \DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        $this->call(PreludioInicialDataRowsTableSeeder::class);
        $this->call(PreludioInicialDataTypesTableSeeder::class);
        $this->call(PreludioInicialFuncionesTableSeeder::class);
        $this->call(PreludioInicialMenuItemsTableSeeder::class);
        $this->call(PreludioInicialMenusTableSeeder::class);
        $this->call(PreludioInicialObrasTableSeeder::class);
        $this->call(PreludioInicialPermissionRoleTableSeeder::class);
        $this->call(PreludioInicialPermissionsTableSeeder::class);
        $this->call(PreludioInicialPresentacionesTableSeeder::class);
        $this->call(PreludioInicialResenasTableSeeder::class);
        $this->call(PreludioInicialRolesTableSeeder::class);
        $this->call(PreludioInicialSettingsTableSeeder::class);
        $this->call(PreludioInicialTeatrosTableSeeder::class);
        $this->call(PreludioInicialTranslationsTableSeeder::class);
        $this->call(PreludioInicialUsersTableSeeder::class);
        \DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
