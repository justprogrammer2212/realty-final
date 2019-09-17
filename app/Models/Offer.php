<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class Offer extends Model implements HasMedia
{
    use HasMediaTrait;
    const USD = '$';
    const UA = '₴';
    const status_Sale = 'ДЛЯ ПРОДАЖУ';
    const status_Rent = 'В ОРЕНДУ';
    public static $offer_currency = [self::USD, self::UA];
    public static $sale = [self::status_Sale, self::status_Rent];
    protected $table = 'offers';
    protected $guarded = ['file'];

    public function getOfferImage() {
        return $this->getFirstMediaUrl('OfferImages') != '' ? $this->getFirstMediaUrl('OfferImages') : asset('images/default/default-house.jpg');
    }

    public function getOfferAdditionalImages() {
        return $this->getMedia('slider_images') ? $this->getMedia('slider_images') : asset('images/default/default-house.jpg');
    }

    public function realtor() {
        return User::find($this->realtor_id);
    }

    public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function user(){
        return $this->belongsTo(User::class, 'realtor_id');
    }

    public function hasRealtor() {
        return $this->realtor_id != null;
    }
 }
