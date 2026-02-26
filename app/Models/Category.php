<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ["title"];
    public function blogs(): HasMany
    {
        return $this->hasMany(Blog::class);
    }
    
}
