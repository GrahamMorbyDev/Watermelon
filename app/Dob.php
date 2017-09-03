<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dob extends Model
{
    protected $fillable = [
        'month' , 'day', 'year', 'ip'
    ];
}
