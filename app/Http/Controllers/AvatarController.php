<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AvatarController extends Controller
{
    public function uploadAvatar(Request $request, User $user) {
        if ($user->hasMedia('Avatar')) {
            $user->getFirstMedia('Avatar')->delete();
        }
        $user->addMedia($request->avatar)->toMediaCollection('Avatar');
        return back();
    }
}
