<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','quantity','price','public_price','category_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getPriceAttribute()
    {
        return number_format(($this->attributes['price']/100), 2,',','');
    }

    public function getPublicPriceAttribute()
    {
        return number_format(($this->attributes['public_price']/100), 2,',','');
    }

}
