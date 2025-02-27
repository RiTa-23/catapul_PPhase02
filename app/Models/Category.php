<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /** @use HasFactory<\Database\Factories\CategoryFactory> */
    use HasFactory;
    public function prices()
    {
    return $this->hasMany(Price::class);
    }
    public function items()
    {
    return $this->hasMany(Item::class);
    }
}
