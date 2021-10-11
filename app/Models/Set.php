<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Set extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'set_number',
        'picture',
        'theme_id',
    ];

    public function theme()
    {
        return $this->belongsTo('App\Theme');
    }

    public function collections()
    {
        return $this->belongsToMany(Collection::class, 'collection_set_fixes');
    }
}
