<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class RoleUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::findOrFail(1);
        $admin->roles()->sync(1);

        $users = User::where('id', '>', 1)->get();
        foreach ($users as $user) {
            $user->roles()->sync(2);
        }
    }
}
