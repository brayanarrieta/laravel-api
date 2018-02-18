<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //fillable fields ti create a country
    protected $fillable = [
        'name', 'abbr','population'
    ];
}
