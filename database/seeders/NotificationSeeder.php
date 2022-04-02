<?php

namespace Database\Seeders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotificationSeeder extends Seeder
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

        DB::table('notifications')->insert([
            [

                'id' => 1,
                'user_type' => 'user',
                'type' => 'subscription',
                'fcm_message_en' => 'subscription 1 message en',
                'fcm_title_en' => 'subscription 1 title en',
                'fcm_message_ar' => 'subscription 1 message ar',
                'fcm_title_ar' => 'subscription 1 title ar',
                'fcm_data' => '{"course_id":"1","student_id":"2","student_image":"/images/admin/exhibitions/photos/expoPhoto_1640713104.png"}',
                // store, coupon, coupon-store
                'user_id' => 1,
                'student_id' => null,
                'status' => 0
            ],
            [
                'id' => 2,
                'user_type' => 'user',
                'type' => 'comment',
                'fcm_message_en' => 'comment 1 message en',
                'fcm_title_en' => 'comment 1 title en',
                'fcm_message_ar' => 'comment 1 message ar',
                'fcm_title_ar' => 'comment 1 title ar',
                'fcm_data' => '{"blog_id":"2","student_id":"2","student_image":"/images/admin/exhibitions/photos/expoPhoto_1640713104.png"}',
                // store, coupon, coupon-store
                'user_id' => 1,
                'student_id' => null,
                'status' => 0
            ],
            [
                'id' => 3,
                'user_type' => 'user',
                'type' => 'register',
                'fcm_message_en' => 'register 1 message en',
                'fcm_title_en' => 'register 1 title en',
                'fcm_message_ar' => 'register 1 message ar',
                'fcm_title_ar' => 'register 1 title ar',
                'fcm_data' => '{"student_email":"stu@gmail.com"}',
                // store, coupon, coupon-store
                'user_id' => 1,
                'student_id' => null,
                'status' => 0

            ],
            [
                'id' => 4,
                'user_type' => 'student',
                'type' => 'subscription',
                'fcm_message_en' => 'subscription 1 message en',
                'fcm_title_en' => 'subscription 1 title en',
                'fcm_message_ar' => 'subscription 1 message ar',
                'fcm_title_ar' => 'subscription 1 title ar',
                'fcm_data' => '{"status":"1"}',
                // store, coupon, coupon-store
                'user_id' => null,
                'student_id' => 1,
                'status' => 0
            ],
            [
                'id' => 5,
                'user_type' => 'student',
                'type' => 'mark',
                'fcm_message_en' => 'mark 1 message en',
                'fcm_title_en' => 'mark 1 title en',
                'fcm_message_ar' => 'mark 1 message ar',
                'fcm_title_ar' => 'mark 1 title ar',
                'fcm_data' => '{"test_id":"1","mark":"50"}',
                // store, coupon, coupon-store
                'user_id' => null,
                'student_id' => 1,
                'status' => 0
            ],
            [
                'id' => 6,
                'user_type' => 'student',
                'type' => 'comment',
                'fcm_message_en' => 'comment 1 message en',
                'fcm_title_en' => 'comment 1 title en',
                'fcm_message_ar' => 'comment 1 message ar',
                'fcm_title_ar' => 'comment 1 title ar',
                'fcm_data' => '{"status":"1","blog_id":"2"}',
                // store, coupon, coupon-store
                'user_id' => null,
                'student_id' => 1,
                'status' => 0
            ],


        ]);

    }
}
