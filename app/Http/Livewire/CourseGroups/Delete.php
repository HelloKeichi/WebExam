<?php

namespace App\Http\Livewire\CourseGroups;

use Livewire\Component;
use App\Models\Course_group;

class Delete extends Component
{
    public $course_group;
    public $openModal = false;

    public function openModalToDeleteTag()
    {
        $this->resetErrorBag();
        $this->openModal = true;
    }
    
    public function delete() 
    {
        //$this->course_group->delete();

        $this->dispatchBrowserEvent('Course_groupDeleted', [
            'title'         => 'Course Group Deleted!',
            'icon'          => 'warning',
            'iconColor'     => 'red',
        ]);

        $this->emitUp('saved');

        $this->reset();
    }

    public function render()
    {
        return view('livewire.course-groups.delete');
    }
}
