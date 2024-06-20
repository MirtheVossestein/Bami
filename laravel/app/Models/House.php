<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    use HasFactory;

    protected $fillable = ['ownerId', 'name', 'category', 'city', 'address', 'zipcode', 'personCapacity', 'rooms', 'description', 'price'];
}
