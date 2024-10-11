<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;


class UserController extends Controller
{
    function index()
    {
        $users = User::query()->latest()->get();

        return view('users.index', [

            'users' => $users
        ]);
    }

    function create()
    {

        return view('users.form', [

            'user' => new User(),

            'page_meta' => [

                'title' => 'Create New user',

                'method' => 'post',

                'url' => '/users',

                'submit_text' => 'Create',
            ]

        ]);
    }

    function store(UserRequest $request)
    {



        User::create($request->validated());

        return redirect('/users');
    }

    function show(User $user)
    {

        return view('users/show', [

            'user' => $user,

        ]);
    }

    function edit(User $user)
    {
        return view('users.form', [

            'user' => $user,

            'page_meta' => [

                'title' => 'Edit user :' . $user->name,

                'method' => 'put',

                'url' => '/users/' . $user->id,

                'submit_text' => 'Update',
            ]

        ]);
    }


    function update(UserRequest $request, User $user)
    {

        $user->update($request->validated());

        return redirect('/users');
    }

    function destroy(User $user)
    {
        $user->delete();


        return redirect('users');
    }
}
