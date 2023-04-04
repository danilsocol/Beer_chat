<?php

    namespace App\Broadcasting;

    use App\Models\User;
    use Illuminate\Support\Facades\Auth;

    class UserChannel
    {

        public function __construct()
        {
            //
        }


        public function join(User $user): bool
        {
            return Auth::id() === $user->id;
        }
    }
