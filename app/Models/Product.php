<?php

namespace App\Models;

use App\Traits\BelongsToTenant;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory, BelongsToTenant;

    public function category() :BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    // protected static function booted()
    // {
    //     static::deleted(function($product){

    //     });
    // }
}
