<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class role extends Model
{
    use HasFactory;
    // belongsTo many
    public function users()
    {
        return $this->belongsToMany(User::class);
        // return $this->hasMany(User::class);
    }
    
}
