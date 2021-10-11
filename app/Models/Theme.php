<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'theme_id',
    ];

    //https://www.diigo.com/profile/Ady_Gould

    public function themes()
    {
        return $this->hasMany(Theme::class);
    }

    public function childrenThemes()
    {
        return $this->hasMany(Theme::class)->with('themes');
    }

    public function set()
    {
        return $this->hasMany('App\Set');
    }
}
