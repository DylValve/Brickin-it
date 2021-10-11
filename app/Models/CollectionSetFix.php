<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CollectionSetFix extends Model
{
    use HasFactory;

    protected $fillable = [
        'set_id',
        'collection_id',
    ];
}
