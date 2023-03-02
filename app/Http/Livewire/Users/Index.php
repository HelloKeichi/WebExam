<?php

namespace App\Http\Livewire\Users;

use App\Models\User;
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
        return view('livewire.users.index', [
            'users'  => User::search($this->search)
                /*->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')*/
                ->paginate($this->perPage)
        ]);
    }
}
