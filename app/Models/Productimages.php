<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
class Productimages extends Model
{
    use HasFactory;
    protected $guarded = [];

    function Product()
    {
        return $this->belongsTo(Product::class);
    }

}
