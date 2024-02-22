<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    // 20240119 加藤　作成 *************************　

    protected $primaryKey = 'answer_no';        // 主キー変更

    protected $table = "answers";
}
