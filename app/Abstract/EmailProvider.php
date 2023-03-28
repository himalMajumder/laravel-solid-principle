<?php
namespace App\Abstract;

use App\Models\User;

abstract class EmailProvider{
    /**
     * Add Sub Scribe
     *
     * @param User $user
     * @return array
     */
    abstract public function addSubScribe(User $user): array;

    /**
     * Send Email
     *
     * @param User $user
     * @return void
     */
    abstract public function sendEmail(User $user): void;
}
