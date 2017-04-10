<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('role_user')->truncate();

        $userRoles = [
            [
                'role_id'           => 1,
                'user_id'           => 1,
            ],
            [
                'role_id'           => 2,
                'user_id'           => 2,
            ],
            [
                'role_id'           => 3,
                'user_id'           => 3,
            ],
            [
                'role_id'           => 4,
                'user_id'           => 4,
            ],
            [
                'role_id'           => 5,
                'user_id'           => 5,
            ],
            [
                'role_id'           => 3,
                'user_id'           => 6,
            ],
        ];

        DB::table('role_user')->insert($userRoles);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
