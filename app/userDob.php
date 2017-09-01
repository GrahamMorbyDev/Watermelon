<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDob extends Model
{
    protected $fillable = [
        'month', 'day', 'year','ip'
    ];
}
