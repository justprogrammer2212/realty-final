<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeOffer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $allOffers = \App\Models\Offer::all();
        foreach ($allOffers as $offer) {
            if ($offer->status == 'FOR SALE') {
                $offer->update(
                    ['status' => \App\Models\Offer::status_Sale]
                );
            }
             else {
                 $offer->update(
                     ['status' => \App\Models\Offer::status_Rent]
                 );
             }
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
