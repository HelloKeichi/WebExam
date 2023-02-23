<?php

namespace App\Http\Livewire\CourseGroups;

use App\Models\CourseGroup;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    
    use WithPagination;

    public $perPage = 5;
    public $search = '';
    public $orderBy = 'id';
    public $orderAsc = true;
    
    protected $listeners = ['saved' => '$refresh'];

    public function render()
    {

        return view('livewire.course-groups.index', [
            'course_groups'  => CourseGroup::search($this->search)
                /*->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')*/
                ->paginate($this->perPage)
        ]);
    }
}
