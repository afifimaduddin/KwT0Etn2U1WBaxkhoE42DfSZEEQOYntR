<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarketProduct extends Model
{
    use HasFactory;
    public function category()
    {
        return $this->belongsTo('App\Models\MarketProductCategory', 'category_id', 'id');
    }
}
