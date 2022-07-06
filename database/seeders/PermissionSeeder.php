<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::create(['name' => 'superadmin']);
        $permission = Permission::create(['name' => 'manage everything']);
        $role->givePermissionTo($permission);

        $role1 = Role::create(['name' => 'user']);
        $permission2 = Permission::create(['name' => 'Can See']);
        $role1->givePermissionTo($permission2);

        $role3 = Role::create(['name' =>
        'manager']);
        $permission3 = Permission::create(['name' => 'Can Edit']);
        $role3->givePermissionTo($permission3);
    }
}
