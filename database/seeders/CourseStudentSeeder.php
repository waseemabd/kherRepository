<?php

namespace Database\Seeders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseStudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Model::unguard();

        DB::table('course_students')->insert([
            [

                'id' => 1,
                'course_id' =>1,
                'student_id' =>1,
                'rating' =>4,
                'created_at' =>now(),
                'updated_at' =>now(),
            ],
            [
                'id' => 2,
                'course_id' =>1,
                'student_id' =>2,
                'rating' =>1.5,
                'created_at' =>now(),
                'updated_at' =>now(),
            ],
            [
                'id' => 3,
                'course_id' =>2,
                'student_id' =>3,
                'rating' =>2.5,
                'created_at' =>now(),
                'updated_at' =>now(),
            ],
            [
                'id' => 4,
                'course_id' =>3,
                'student_id' =>4,
                'rating' =>3,
                'created_at' =>now(),
                'updated_at' =>now(),
            ],

        ]);
    }
}
