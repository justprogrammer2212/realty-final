<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChangeUserDataRequest;
use App\Models\Category;
use App\Models\Offer;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function user()
    {
        $userOffers = Offer::Where('user_id', Auth::user()->id)->OrderBy('id', 'DESC')->paginate(6);
        return view('user.profile', compact('userOffers'));
    }

    public function userAdd() {
        $categories = Category::get();
        return view('user.profile-add', compact('categories'));
    }

    public function userEdit(User $user_id) {

        return view('user.edit-profile', compact('user_id'));
    }

    public function userDelete(Offer $user_id) {
        $user_id->delete();
        return redirect()->route('user_profile');
    }


    public function userUpdate(ChangeUserDataRequest $request)
    {
        $user = Auth::user();
        $params = $request->validated();

        if (isset($params['old_password']) && isset($params['password'])) {
            if (Hash::check($params['old_password'], $user->password) && $params['password']) {
                unset($params['old_password']);
                $params['password'] = Hash::make($params['password']);
                $user->update($params);
            } else if ($params['password']) {
                return redirect()->route('user_profile_edit', $user)->withErrors(['old_password' => 'You have entered an incorrect password!']);
            };
        } else {
            $user->update($params);
        }
        return redirect()->route('user_profile', $user);
    }
}
