<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    use HasFactory;
    public function image()
    {
        return $this->hasOne(Image::class, 'houseId', 'id');
    }

    protected $fillable = ['ownerId', 'category', 'city', 'address', 'zipcode', 'personCapacity', 'rooms', 'descriptionLocation', 'descriptionHouse', 'price'];
}
