<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Seeder;

class PermissionRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin_permissions = Permission::all();
        Role::findOrFail(1)->permissions()->sync($admin_permissions);

        $user_permissions = $admin_permissions->filter(function ($permission) {
            return $permission->name == 'product-access' || $permission->name == 'product-show';
        });
        Role::findOrFail(2)->permissions()->sync($user_permissions);
    }
}
