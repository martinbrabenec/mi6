<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alias extends Model
{
    protected $fillable = ['alias', 'person_id'];

    // Define relationships
    public function person()
    {
        return $this->belongsTo(Person::class);
    }
}
