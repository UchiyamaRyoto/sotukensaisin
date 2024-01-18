<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class questionsModel extends Model
{
    use HasFactory;

    protected $primaryKey = 'question_id';
    protected $keyType = 'increments';
}
