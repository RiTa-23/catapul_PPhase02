<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    /** @use HasFactory<\Database\Factories\PriceFactory> */
    use HasFactory;
    protected $fillable = ['price', 'item_id', 'store_id', 'user_id'];

    public function item()
    {
        return $this->belongsTo(Item::class);
    }

    public function store()
    {
        return $this->belongsTo(Store::class,'store_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
