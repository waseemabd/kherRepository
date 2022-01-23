<?php

namespace Database\Seeders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionSeeder extends Seeder
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

        DB::table('questions')->insert([
            [

                'id' => 1,
                'desc' =>'question 1',
                'image' =>'',
                'mark' => 100,
                'question_type_id' => 1,
                'test_id' =>1,
                'created_at' =>now(),
                'updated_at' =>now(),
            ],
            [
                'id' => 2,
                'desc' =>'question 2',
                'image' =>'',
                'mark' => 100,
                'question_type_id' => 2,
                'test_id' =>1,
                'created_at' =>now(),
                'updated_at' =>now(),
            ],
            [
                'id' => 3,
                'desc' =>'question 3',
                'image' =>'',
                'mark' => 100,
                'question_type_id' => 3,
                'test_id' =>2,
                'created_at' =>now(),
                'updated_at' =>now(),
            ],
            [
                'id' => 4,
                'desc' =>'question 4',
                'image' =>'',
                'mark' => 100,
                'question_type_id' => 4,
                'test_id' =>2,
                'created_at' =>now(),
                'updated_at' =>now(),
            ],

        ]);
    }
}
