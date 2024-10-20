<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    /** @use HasFactory<\Database\Factories\StoreFactory> */
    use HasFactory;
    protected $fillable=['locationX','locationY'];//緯度経度
    public function prices()
    {
    return $this->hasMany(Price::class);
    }
}