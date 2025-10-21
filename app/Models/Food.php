<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'image',
        'description',
        'restaurant_name',
        'restaurant_id',
    ];

    protected $table = 'foods';

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
