<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function category() {
        return $this->belongsTo(Category::class);
    }
   /*  public function images() {
        return $this->hasMany(ProductImage::class);
    } */
    protected $table = 'products';
    public $primaryKey = 'id';
    protected $attributes = [];
    protected $dates = [];
    protected $fillable = ['name', 'slug', 'price', 'sale_price', 'description', 'short_description', 'image', 'instock', 'hot', 'rating', 'hidden_show', 'category_id'];
}
