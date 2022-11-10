<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;
    // has many comments

    public function comments()
    {
        return $this->hasMany(comment::class);
    }
}
