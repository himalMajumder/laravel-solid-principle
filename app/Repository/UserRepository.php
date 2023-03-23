<?php
namespace App\Repository;

use App\Models\User;

class UserRepository {

    /**
     * Save the resource in the database
     *
     * @param object $userData
     * @return App\Models\User
     */
    public function create($userData) {
        $user           = new User();
        $user->name     = $userData->name;
        $user->email    = $userData->email;
        $user->password = bcrypt($userData->password);
        $user->save();

        return $user;
    }
}
