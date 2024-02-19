<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    use HasFactory;

    // 20240119 加藤　作成

    protected $primaryKey = 'collection_id';        // 主キー変更

    protected $table = "collections";
}
