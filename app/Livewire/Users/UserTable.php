<?php

namespace App\Livewire\Users;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;
use Livewire\Attributes\Title;
use Livewire\Attributes\Computed;

#[Title("CD Laravel Base - User Table Example")]


class UserTable extends Component
{
    use WithPagination;

    public $sortBy = 'name';
    public $sortDirection = 'asc';
    public $nameFilter = '';

    public function render()
    {
        // add additional data to the view if needed
        return view('livewire.users.user-table');
    }

    public function sort($column) {

       if ($this->sortBy === $column) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortBy = $column;
            $this->sortDirection = 'asc';
        }
    }

    public function filterByName(string $name): void
    {
        $this->nameFilter = $name;
        $this->resetPage();
    }

    public function updatingNameFilter(): void
    {
        $this->resetPage();
    }

    #[Computed]
    public function users()
    {
        return User::query()
            ->when($this->nameFilter !== '', function ($query) {
                $query->where('name', 'like', '%' . $this->nameFilter . '%');
            })
            ->orderBy($this->sortBy, $this->sortDirection)
            ->paginate(5);
    }


}
