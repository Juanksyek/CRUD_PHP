<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 *
 * @property $id
 * @property $created_at
 * @property $updated_at
 * @property $name
 * @property $description
 * @property $slug
 * @property $price
 * @property $stock
 * @property $brand
 * @property $features
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Product extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['name', 'description', 'slug', 'price', 'stock', 'brand', 'features'];


}
