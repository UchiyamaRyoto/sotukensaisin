<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class collectionsModel extends Model
{
    use HasFactory;

    protected $primaryKey = 'collection_id';
    protected $keyType = 'increments';
}
