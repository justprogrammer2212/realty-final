<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddOfferRequest;
use App\Http\Requests\UpdateOfferRequest;
use App\Models\Category;
use App\Models\Offer;
use App\Notifications\EmailVerefication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OffersController extends Controller
{
    public function offers() {
        $offers = Offer::orderBy('id', 'DESC')->paginate(9);
        return view('offers.offers', compact('offers'));
    }

    public function offer_show(Offer $show) {
        $show->increment('views');
        $realtor = $show->realtor();
        $related_offers = Offer::orderBy('id', 'DESC')->take(4)->get();

        return view('offers.offer', compact('show','related_offers', 'realtor'));
    }

    public function homePage_offers() {
//        Auth::user()->notify(new EmailVerefication());
        $recent = Offer::OrderBy('created_at', 'DESC')->take(4)->get();
        $popular = Offer::OrderBy('views', 'DESC')->take(6)->get();
        $categories = Category::get();
        return view('index', compact('recent','popular', 'categories'));
    }

    public function addOffer(AddOfferRequest $request) {
        $offer = Offer::create($request->validated());

        $offer->addMedia($request->file)->toMediaCollection('OfferImages');

        if($request->hasFile('files')) {
            $offer->addMultipleMediaFromRequest(['files'])->each(function ($fileAdd) {
                $fileAdd->toMediaCollection('slider_images');
            });
        }

        return redirect()->route('user_profile');
    }

    public function offerEdit(Offer $offer) {
            return view('user.edit-profile_offer', compact('offer'));
    }

    public function offerUpdate(UpdateOfferRequest $request, Offer $offer) {
        if($offer->hasMedia('OfferImages') && $request->hasFile('offer_image')){
            $offer->getFirstMedia('OfferImages')->delete();
        }

        if($request->hasFile('offer_image')) {
            $offer->addMedia($request->offer_image)->toMediaCollection('OfferImages');
        }

        $data = $request->all();
        unset($data['offer_image']);

        $offer->update($data);

        return redirect()->route('user_profile');
    }

    public function offersCategories($id) {
        $offers = Offer::where('category_id', $id)->orderBy('id', 'DESC')->paginate(9);
        return view('offers.offers', compact('offers'));
    }

    public function search(Request $request)
    {
        $offers = Offer::where('title', 'like', '%' . $request->title . '%')
            ->orderByDesc('created_at')
            ->paginate(9);

        return view('offers.offers', compact('offers'));
    }
}
