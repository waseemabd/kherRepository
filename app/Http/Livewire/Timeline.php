<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Timeline extends Component
{
    public function render()
    {
        $courses = auth('admin')->user()->courses;
        // foreach ($courses as $key => $course){
        //     echo $course->lectures;
        // }
        // die();
        return view('livewire.timeline', compact('courses'));
    }
}
