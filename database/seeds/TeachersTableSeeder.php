<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class TeachersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('teachers')->truncate();

        $teacher = [
            [
                'name'              => 'Teacher1',
                'user_id'           => 3,
                'role_id'           => 3,
                'classes'           => 'C1',
                'subjects'          => 'S1',
                'is_class_teacher'  => true,
                'qualification'     => 'B.Tech',
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now(),
            ],
            [
                'name'              => 'Teacher2',
                'user_id'           => 6,
                'role_id'           => 3,
                'classes'           => 'C2',
                'subjects'          => 'S2',
                'is_class_teacher'  => false,
                'qualification'     => 'M.Sc.',
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now(),
            ],
        ];

        DB::table('teachers')->insert($teacher);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
