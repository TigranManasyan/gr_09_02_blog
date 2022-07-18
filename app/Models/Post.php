<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    public $fillable = [
        "subject",
        "user_id",
        "image",
        "content",
    ];

    public function users() {
        return $this->hasMany(User::class);
    }
}
