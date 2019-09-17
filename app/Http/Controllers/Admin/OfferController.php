<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UpdateOfferRequest;
use App\Models\Category;
use App\Models\Offer;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function index()
    {
        $countedOffers = Offer::count();

        $offers = Offer::orderByDesc('id')->paginate(50);

        return view('admins.pages.offers.index', compact('offers', 'countedOffers'));
    }

    public function edit(Offer $offer)
    {
        $categories = Category::all();
        return view('admins.pages.offers.edit', compact('offer', 'categories'));
    }

    public function update(UpdateOfferRequest $request, Offer $offer)
    {
        if($offer->hasMedia('OfferImages') && $request->hasFile('file')){
            $offer->getFirstMedia('OfferImages')->delete();
        }

        if($request->hasFile('file')) {
            $offer->addMedia($request->file)->toMediaCollection('OfferImages');
        }

        $data = $request->validated();
        unset($data['offer_image']);

        $offer->update($data);

        return redirect()->route('admin.offers.index');
    }

    public function destroy(Offer $offer)
    {
        $offer->delete();
        return back();
    }
}
