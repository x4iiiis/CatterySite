<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class CreateSitePermissions extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $devRole = Role::create(['name' => 'Developer']);
        $adminRole = Role::create(['name' => 'Administrator']);

        //Roles and permissions have been imported here, but are not being used yet
        //Hence 'Placeholder'
        Permission::create(['name' => 'DevPermissionPlaceholder']);
        Permission::create(['name' => 'AdminPermissionPlaceholder']);

        $devRole->syncPermissions(Permission::all());
        $adminRole->syncPermissions([
            'AdminPermissionPlaceholder'
        ]);
    }
}
