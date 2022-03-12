<?php

namespace Database\Seeders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingImageSeeder extends Seeder
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

        DB::table('setting_images')->insert([
            [

                'id' => 1,
                'type' =>'first',
                'name' =>'image 1',
                'path' =>'',
                'created_at' =>now(),
                'updated_at' =>now(),
            ],
            [
                'id' => 2,
                'type' =>'second',
                'name' =>'image 2',
                'path' =>'',
                'created_at' =>now(),
                'updated_at' =>now(),
            ],
            [
                'id' => 3,
                'type' =>'third',
                'name' =>'image 2',
                'path' =>'',
                'created_at' =>now(),
                'updated_at' =>now(),
            ],
            [
                'id' => 4,
                'type' =>'forth',
                'name' =>'image 4',
                'path' =>'',
                'created_at' =>now(),
                'updated_at' =>now(),
            ],

        ]);
    }
}
