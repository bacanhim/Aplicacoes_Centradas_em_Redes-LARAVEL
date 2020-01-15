<?php

namespace App\Policies;

use App\User;
use App\Filme;
use Illuminate\Auth\Access\HandlesAuthorization;

class FilmesPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public function update(User $user, Filme $filme)
    {
        return $filme->owner_id == $user->id;
    }
}
