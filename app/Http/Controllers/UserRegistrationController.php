<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Repository\UserRepository;
use Illuminate\Http\Request;
use App\Models\User;

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

    // /**
    //  * Store a newly created user in storage
    //  *
    //  * @param Illuminate\Http\Request $request
    //  * @param UserRepository $userRepository
    //  * @return \Illuminate\Http\RedirectResponse
    //  */
    // public function store(Request $request) {

    //     $validate = $request->validate([
    //         'name'     => 'required|string',
    //         'email'    => 'required|email|regex:/(.+)@(.+)\.(.+)/i',
    //         'password' => 'required|min:6',
    //     ]);
    //     $user           = new User();
    //     $user->name     = $validate->name;
    //     $user->email    = $validate->email;
    //     $user->password = bcrypt($validate->password);
    //     $user->save();

    //     return redirect()->back()->with('success', 'User create successfully');
    // }
}
