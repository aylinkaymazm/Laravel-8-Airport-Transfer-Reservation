<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

#one to many
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function transferitem(){
        return $this->hasMany(Transferitem::class);
    }
}
