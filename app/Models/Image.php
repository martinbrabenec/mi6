<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['path'];

    // Define relationships
    public function person()
    {
        return $this->hasOne(Person::class);
    }
}
