<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class owner extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'company_id'];
    // one to one 
    public function company()
    {
        return $this->belongsTo(company::class);
    }
}
