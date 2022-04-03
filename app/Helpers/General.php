<?php

namespace App\Helpers;

use App\Models\Language;
use App\Models\Student;
use App\Models\StudentFile;
use App\Models\StudentTest;
use Illuminate\Support\Facades\Config;
use app\Helpers;

class General
{
    function get_languages()
    {

        return Language::active()->Selection()->get();
    }

    function get_default_lang()
    {
        return Config::get('app.locale');
    }


    function uploadImage($folder, $image)
    {
        $image->store('/', $folder);
        $filename = $image->hashName();
        $path = 'images/' . $folder . '/' . $filename;
        return $path;
    }

    static function roleUser($role)
    {

        if ($role == 1) {
            return 'super admin';
        }
        elseif ($role == 2)
        {
            return 'teacher';
        }
        elseif ($role == 3)
        {
            return 'admin';
        }
        elseif ($role == 4)
        {
            return 'publisher';
        }
    }


    public function studentResult($course,$student_id)
    {
        $tests=$course->tests;
        $tests_mark_array=[];
        $tests_mark=0;
        $homeworks_mark_array=[];
        $homeworks_mark=0;

        foreach ($tests as $test)
        {
            $tests_mark_array[]=StudentTest::where('test_id',$test->id)->where('student_id',$student_id)->pluck('total_mark');
            $tests_mark+=StudentTest::where('test_id',$test->id)->where('student_id',$student_id)->first()->total_mark;
        }
        $average_test=$tests_mark/count($tests_mark_array);
        $lectures=$course->lectures;
        foreach ($lectures as $lecture)
        {
            if($homework=StudentFile::where('homework_id',$lecture->homework->id)->where('student_id',$student_id)->first())
            {
            $homeworks_mark_array[]=StudentFile::where('homework_id',$lecture->homework->id)->where('student_id',$student_id)->pluck('mark');
            $homeworks_mark+=$homework->mark;
            }

        }
        $average_homeworks=$homeworks_mark/count($homeworks_mark_array);
        $result=($average_test*$course->testPercentage/100) +($average_homeworks*$course->homeworkPercentage/100) + (60*$course->presencePercentage/100 );
        return $result;
    }

    function resultStudentText($course,$student_id)
    {
       if(General::studentResult($course,$student_id) >=60)
       {
           return 'ناجح';
       }
       elseif (General::studentResult($course,$student_id) <60 )
       {
           return 'راسب';
       }
    }


    function uploadVideo($folder, $video)
    {
        $video->store('/', $folder);
        $filename = $video->hashName();
        $path = 'video/' . $folder . '/' . $filename;
        return $path;
    }
}


