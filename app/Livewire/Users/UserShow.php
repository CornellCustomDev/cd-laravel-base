<?php

namespace App\Livewire\Users;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;

#[Layout('components.layouts.app', [
    'title' => 'User',
])]
class UserShow extends Component
{
    public User $user;
}
