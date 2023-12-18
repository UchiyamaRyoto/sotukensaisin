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
        ,"questionText"
        ,"updTime"
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
