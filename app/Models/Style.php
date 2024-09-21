<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Style extends Model
{
    use HasFactory;

    protected $fillable = ['style'];

    // Relationships
    public function sizeColorStyleCombinations()
    {
        return $this->hasMany(ProductSizeColorStyle::class);
    }
}
