<?php

namespace App\Provider;

use App\Abstract\EmailProvider;
use App\Models\User;

class MailChimp extends EmailProvider{
    /**
     * Liskov Substitution Principle
     * -----------------------------
     * Child Class should not break parent class's type definition and behavior.
     * LSP is a fundamental principle of SOLID principles and states that if program or module
     * is using base class then derived class should be able to extend their base class without
     * changing their original implementation.
     */


    /**
     * Add Sub Scribe
     *
     * @param User $user
     * @return array
     */
    public function addSubScribe(User $user):array
    {
        return [];
    }

    /**
     * Send Email
     *
     * @param User $user
     * @return void
     */
    public function sendEmail(User $user):void
    {

    }

    /**
     * new Function
     *
     * @param User $user
     * @return void
     */
    public function newFunction()
    {
        //Violate Liskov Substitution Principle
    }
}
