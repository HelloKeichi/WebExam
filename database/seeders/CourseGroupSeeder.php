<?php

namespace Database\Seeders;

use App\Models\Course_group;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('course_groups')->insert([
            [
                'name'          => '语文',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'name'          => '数学',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'name'          => '英语',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
        ]);

        //Course_group::factory()->count(10)->create();
    }
}
