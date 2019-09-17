<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class Category extends Model implements HasMedia
{
    use HasMediaTrait;

    protected $table = 'categories';

    protected $fillable = ['name'];

    public function offers() {
        return $this->hasMany(Offer::class);
    }

    public function getImageUrl()
    {
        return $this->hasMedia('CategoryImage') ? $this->getFirstMediaUrl('CategoryImage') : asset('images/feature-cate/1.jpg');
    }
}
