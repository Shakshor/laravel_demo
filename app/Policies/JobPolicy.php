<?php

namespace App\Policies;

use App\Models\Job;
use App\Models\User;

class JobPolicy
{

    // permission for update job
    public function edit(User $user, Job $job): bool
    {
        return $job->employer->user->is($user);
    }
}
