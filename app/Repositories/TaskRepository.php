<?php

namespace App\Repositories;
use App\Models\User;

class TaskRepository
{
    /**
     * Get all of the tasks for a given user.
     *
     * @param  User  $user
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function forUser(User $user): \Illuminate\Database\Eloquent\Collection
    {
        return $user->tasks()
            ->orderBy('created_at', 'asc')
            ->get();
    }
}
