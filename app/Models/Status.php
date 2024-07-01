<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $fillable = ['name'];

    // Define relationships
    public function people()
    {
        return $this->hasMany(Person::class);
    }
}
