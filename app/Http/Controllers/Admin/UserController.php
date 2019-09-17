<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ChangeUserDataRequest;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate('50');

        return view('admins.pages.users.index', compact('users'));
    }

    public function edit(User $user)
    {
        $roles = User::getAllRolesAsArray();
        return view('admins.pages.users.edit', compact('user', 'roles'));
    }

    public function update(ChangeUserDataRequest $request, User $user)
    {
        $user->update($request->validated());

        if ($request->avatar_checkbox) {
            $user->getFirstMedia('avatar')->delete();
        }
        return redirect()->route('admin.users.index');
    }

    public function destroy(User $user)
    {
        $user->delete();

        return back();
    }

    public function ban(User $user)
    {
        $this->authorize('beBanned', $user);

        $user->isNotBanned() ? $user->ban() : $user->unban();

        return back();
    }
}
