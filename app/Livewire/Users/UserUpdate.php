<?php

namespace App\Livewire\Users;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;

#[Layout('components.layouts.app', [
    'title' => 'Edit User',
])]
class UserUpdate extends Component
{
    public User $user;

    #[Validate('required|string|max:255')]
    public string $name = '';

    #[Validate('required|email|max:255')]
    public string $email = '';

    public function mount(User $user): void
    {
        $this->user = $user;
        $this->name = $user->name;
        $this->email = $user->email;
    }

    public function save()
    {
        // $this->authorize('update', $user);

        // Apply validation rules
        $this->validate();

        // Get only the validated attributes
        $attributes = $this->all();

        // Update the user with validated attributes
        $this->user->update($attributes);

        return redirect()->route('admin.users.show', $this->user);
    }
}
