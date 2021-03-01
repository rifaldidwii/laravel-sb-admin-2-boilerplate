<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            [
                'name'      => 'permission-access',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name'      => 'permission-show',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name'      => 'permission-create',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name'      => 'permission-update',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name'      => 'permission-delete',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name'      => 'role-access',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name'      => 'role-show',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name'      => 'role-create',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name'      => 'role-update',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name'      => 'role-delete',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name'      => 'user-access',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name'      => 'user-show',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name'      => 'user-create',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name'      => 'user-update',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name'      => 'user-delete',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name'      => 'product-access',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name'      => 'product-show',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name'      => 'product-create',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name'      => 'product-update',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name'      => 'product-delete',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
