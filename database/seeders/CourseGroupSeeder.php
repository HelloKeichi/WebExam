<?php

namespace Database\Seeders;

use App\Models\Course_group;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
        DB::table('course_group')->insert([
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

        Tag::factory()->count(10)->create();
    }
}
