<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $fillable = [
        'name', 'age', 'born', 'died', 'eye_color', 'hair_color', 'height', 
        'weight', 'nationality', 'occupation', 'title', 'status_id', 'image_id', 'status_text'
    ];

    // Define relationships
    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function aliases()
    {
        return $this->hasMany(Alias::class);
    }

    public function image()
    {
        return $this->belongsTo(Image::class);
    }
}
