<?php

namespace App\Http\Livewire\CourseGroup;

use App\Models\Course_group;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    
    use WithPagination;

    public $perPage = 5;
    public $search = '';
    public $orderBy = 'id';
    public $orderAsc = true;

    public function render()
    {

        return view('livewire.course-group.index', [
            'course_groups'  => Course_group::search($this->search)
                /*->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
                ->paginate($this->perPage)*/
        ]);
    }
}
