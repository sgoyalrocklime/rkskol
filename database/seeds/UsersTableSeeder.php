<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('users')->truncate();

        $users = [
            [
                'name'              => 'Rocklime (Super Admin)',
                'email'             => 'sgoyal@rocklime.com',
                'password'          => bcrypt('1234'),
                'role_id'           => 1,
                'confirmation_code' => md5(uniqid(mt_rand(), true)),
                'status'            => true,
                'confirmed'         => true,
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now(),
            ],
            [
                'name'              => 'Admin',
                'email'             => 'admin@admin.com',
                'password'          => bcrypt('1234'),
                'role_id'           => 2,
                'confirmation_code' => md5(uniqid(mt_rand(), true)),
                'status'            => true,
                'confirmed'         => true,
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now(),
            ],
            [
                'name'              => 'Teacher',
                'email'             => 'teacher@teacher.com',
                'password'          => bcrypt('1234'),
                'role_id'           => 3,
                'confirmation_code' => md5(uniqid(mt_rand(), true)),
                'status'            => true,
                'confirmed'         => true,
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now(),
            ],
            [
                'name'              => 'Parents',
                'email'             => 'parents@parents.com',
                'password'          => bcrypt('1234'),
                'role_id'           => 4,
                'confirmation_code' => md5(uniqid(mt_rand(), true)),
                'confirmed'         => true,
                'status'            => true,
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now(),
            ],
            [
                'name'              => 'Students',
                'email'             => 'student@student.com',
                'password'          => bcrypt('1234'),
                'role_id'           => 5,
                'confirmation_code' => md5(uniqid(mt_rand(), true)),
                'confirmed'         => true,
                'status'            => true,
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now(),
            ],
            [
                'name'              => 'Teacher2',
                'email'             => 'teacher2@teacher2.com',
                'password'          => bcrypt('1234'),
                'role_id'           => 3,
                'confirmation_code' => md5(uniqid(mt_rand(), true)),
                'status'            => true,
                'confirmed'         => true,
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now(),
            ],
        ];

        DB::table('users')->insert($users);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
