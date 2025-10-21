<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        //'location',
        //'rating',
        //'image',
        'description',
    ];

    public function foods()
    {
        //return $this->hasMany(Food::class, 'restaurant_name', 'name');
        return $this->hasMany(Food::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
