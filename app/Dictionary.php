<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dictionary extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'dictionaryType',
        'meaning',
        'isEnabled',
    ];
}
