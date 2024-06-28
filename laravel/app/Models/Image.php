<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = ['house_id', 'image']; // Ensure this matches your database columns

    public function getEncodedImageAttribute()
    {
        return base64_encode($this->image);
    }
}