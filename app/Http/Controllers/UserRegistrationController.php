<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Repository\UserRepository;

class UserRegistrationController extends Controller {
    /**
     * Store a newly created user in storage
     *
     * @param StoreUserRequest $request
     * @param UserRepository $userRepository
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreUserRequest $request, UserRepository $userRepository) {
        $userRepository->create($request);

        return redirect()->back()->with('success', 'User create successfully');
    }
}
