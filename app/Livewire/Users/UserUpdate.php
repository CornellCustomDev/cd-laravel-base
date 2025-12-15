<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.app', [
    'title' => 'Edit User',
])]
class UserUpdate extends Component
{
    public User $user;
}
