<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;
    public $table = "history";
    public $fillable = [
        "table_name",
        "user_id",
        "type",
        "row_id"
    ];
}
