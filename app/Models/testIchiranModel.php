<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class testIchiranModel extends Model
{
    use HasFactory;

    protected $table = "question_collections";
    protected $fillable = [
        "id"
        ,"question_collection_name"
        ,"created_at"
        ,"updated_at"
    ];

}
