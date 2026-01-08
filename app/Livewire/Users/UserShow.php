<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.app', [
    'title' => 'User',
])]
class UserShow extends Component
{
    public User $user;
}
