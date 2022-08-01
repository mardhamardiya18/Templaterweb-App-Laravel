<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'users_id', 'categories_id', 'benefits_id', 'name', 'price',
        'description', 'slug', 'views', 'sales', 'priority'
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'id' . 'users_id');
    }

    public function gallery()
    {
        return $this->hasMany(ProductGallery::class, 'products_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'categories_id', 'id');
    }
}