<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;
use Illuminate\Pagination\LengthAwarePaginator;
use Livewire\Attributes\Title;
use Livewire\Attributes\Computed;


#[Title("CD Laravel Base - User Table Example")]


class UserTable extends Component
{
    use WithPagination;

    public $allUsers;
    public $selectedUser;
    public $selectedUserId = null;   //you can set a default user id here
    public $sortBy = 'name';
    public $sortDirection = 'desc';


    public function mount()
    {
        $this->allUsers = User::select('id', 'name')->get();
        $this->selectedUser = $this->selectedUserId ? $this->allUsers->firstWhere('id', $this->selectedUserId) : null;
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

    public function updatedSelectedUserId($userId)
    {
        $this->selectedUser = $this->allUsers->firstWhere('id', $userId);
    }

    #[Computed]
    public function users()
    {
        return User::query()
            ->tap(fn ($query) => $this->sortBy ? $query->orderBy($this->sortBy, $this->sortDirection) : $query)
            ->paginate(5);
            // simple pagination:
            // return User::orderBy($this->sortBy, $this->sortDirection)->simplePaginate(5);
    }

}
