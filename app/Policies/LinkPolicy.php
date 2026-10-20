<?php

namespace App\Policies;

use App\Models\Link;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class LinkPolicy
{
    public function updated(User $user, Link $link)
    {
        return $link->user->is($user) ? Response::allow() : Response::deny('Esse link não é seu!!');
    }
}
