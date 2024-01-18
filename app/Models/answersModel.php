<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class answersModel extends Model
{
    use HasFactory;

    protected $primaryKey = 'answer_id';
    protected $keyType = 'increments';
}
