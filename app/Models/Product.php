<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\HasMany;


use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Product extends Model
{
    use HasFactory;
    
        protected $fillable = [
        'name',
        'slug',
        'category_id',
        'description',
        'price',
        'stock',
        'status',
        'unit'
    ];
    protected $appends = ['image_url','average_rating'];


    public function category()
    {
        return $this->belongsTo(Category::class);
    }
     public function images()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function cartItem(){

        return $this->hasMany(CartItem::class);
    }

    public function firstImage(){

        return $this->hasOne(ProductImage::class)->orderBy('id', 'ASC');

    }
    public function reviews()
{
    return $this->hasMany(Review::class);
}

public function getImageUrlAttribute()
{

     $baseDir = 'storage/uploads/products/';

    return $this->firstImage?->image
        ? asset($baseDir . $this->firstImage->image)
        : asset($baseDir . 'default-product.png');
    // Nếu firstImage tồn tại, lấy thẳng link, không dùng asset()
    // return $this->firstImage && $this->firstImage->image
    //     ? $this->firstImage->image  // link trực tiếp từ Google, CDN, etc.
    //     : 'https://via.placeholder.com/150'; // link default
}


public function getAverageRatingAttribute()
{
    return $this->reviews()->avg('rating') ?? 0;
}

}
