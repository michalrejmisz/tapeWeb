<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_pl', 'category_id', 'description_pl', 'image', 'description_en', 'name_en', 'hidden'
    ];

    public function category(){
        return $this->hasOne(Category::class);
    }
}
