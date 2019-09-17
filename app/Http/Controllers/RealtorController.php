<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\User;
use Illuminate\Http\Request;

class RealtorController extends Controller
{
    public function listRealtors($offer_id) {
        $realtors = User::Where('role',User::ROLE_REALTOR)->get();
        return view('user.user-realtor', compact('realtors', 'offer_id'));
    }

    public function selectRealtor($offer_id, $realtor_id) {
        $offer_find = Offer::find($offer_id);
        $offer_find->realtor_id = $realtor_id;
        $offer_find->save();
        return redirect()->route('user_profile');
    }

    public function releaseRealtor($offer_id) {
        $offer_find = Offer::find($offer_id);
        $offer_find->realtor_id = null;
        $offer_find->save();
        return redirect()->route('user_profile');
    }
}
