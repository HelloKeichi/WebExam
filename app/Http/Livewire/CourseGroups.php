<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CourseGroups extends Component
{
    public function render()
    {
        return view('livewire.course-groups')
        ->layout('layouts.app');
    }
}
