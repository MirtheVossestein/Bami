<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class House extends Model
{
    use HasFactory;

    protected $fillable = ['ownerId', 'category', 'city', 'address', 'zipcode', 'personCapacity', 'rooms', 'descriptionLocation', 'descriptionHouse', 'price'];

    public function images(): HasMany
    {
        return $this->hasMany(Image::class);
    }
}
