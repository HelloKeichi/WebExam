<?php

namespace App\Http\Livewire\CourseGroups;

use Livewire\Component;

class Edit extends Component
{
    public $course_group;
    public $openModal = false;
    public $formId;

    protected function rules()
    {
        return [
            'course_group.name' => 'required|min:1|max:10',
        ];
    }

    public function render()
    {
        return view('livewire.course-groups.edit');
    }

    public function openModalToUpdateCourseGroup()
    {
        $this->resetErrorBag();
        $this->openModal = true;
    }

    public function updated($property)
    {
        $this->validateOnly($property);
    }
}
