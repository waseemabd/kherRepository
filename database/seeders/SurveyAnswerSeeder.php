<?php

namespace Database\Seeders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SurveyAnswerSeeder extends Seeder
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

        DB::table('survey_answers')->insert([
            [

                'id' => 1,
                'desc' =>'answer 1',
                'bool' =>null,
                'options' => null,
                'student_id' =>1,
                'survey_question_id' =>1,
                'created_at' =>now(),
                'updated_at' =>now(),
            ],
            [
                'id' => 2,
                'desc' =>null,
                'bool' =>null,
                'options' => 1,
                'student_id' =>1,
                'survey_question_id' =>2,
                'created_at' =>now(),
                'updated_at' =>now(),
            ],
            [
                'id' => 3,
                'desc' =>null,
                'bool' =>1,
                'options' => null,
                'student_id' =>2,
                'survey_question_id' =>3,
                'created_at' =>now(),
                'updated_at' =>now(),
            ],
            [
                'id' => 4,
                'desc' =>'answer 2',
                'bool' =>null,
                'options' => null,
                'student_id' =>3,
                'survey_question_id' =>1,
                'created_at' =>now(),
                'updated_at' =>now(),
            ],

        ]);
    }
}
