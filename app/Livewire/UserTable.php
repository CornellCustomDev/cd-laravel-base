<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;
use Livewire\Attributes\Title;
use Livewire\Attributes\Computed;


#[Title("CD Laravel Base - User Table Example")]



class UserTable extends Component
{
    use WithPagination;

    public $users;
    public $sortBy = 'name';
    public $sortDirection = 'desc';



    public function mount()
    {
        $this->users = User::all();
    }


    public function render()
    {
        return view('livewire.user-table');
    }

       public function sort($column) {
        if ($this->sortBy === $column) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortBy = $column;
            $this->sortDirection = 'asc';
        }
    }

    #[Computed]
    public function users()
    {
        return User::query()
            ->tap(fn ($query) => $this->sortBy ? $query->orderBy($this->sortBy, $this->sortDirection) : $query)
            ->paginate(5);
    }
}
