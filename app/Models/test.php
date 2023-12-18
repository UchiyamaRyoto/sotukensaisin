<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class test extends Model
{
    use HasFactory;

    protected $table = "test";
    protected $fillable = [
        "id"
        ,"name"
        ,"tensu"
        ,"content"
        ,"deleted_flag"
        ,"created_at"
        ,"updated_at"
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
