<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    // 20240119 加藤　作成 ********************************

    protected $primaryKey = 'question_id';      // 主キー変更
}
