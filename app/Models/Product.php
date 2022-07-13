<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $fillable = [
        'name',
        'qt',
        'price',
        'category_id',
        'user_id'
    ];

    public function categories() {
        return $this->hasMany(Category::class);
    }

    public function users() {
        return $this->hasMany(User::class);
    }
}
