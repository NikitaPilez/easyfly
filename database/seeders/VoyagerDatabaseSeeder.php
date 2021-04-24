<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class VoyagerDatabaseSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            DataTypesTableSeeder::class,
            DataRowsTableSeeder::class,
            MenusTableSeeder::class,
            MenuItemsTableSeeder::class,

            AgenciesTableSeeder::class,
            ToursTableSeeder::class,
            OrdersTableSeeder::class,
            ArticlesTableSeeder::class,
            SlidersTableSeeder::class,
            ServicesTableSeeder::class,

            RolesTableSeeder::class,
            PermissionsTableSeeder::class,
            PermissionRoleTableSeeder::class,
            SettingsTableSeeder::class,
        ]);
    }
}
