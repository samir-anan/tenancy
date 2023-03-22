<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Tenant extends Model
{
    use HasFactory;

    public function categories() :HasMany
    {
        return $this->hasMany(Category::class);
    }

    public function products() :HasMany
    {
        return $this->hasMany(Product::class);
    }
}
