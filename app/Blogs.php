<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'title',
        'description',
        'featuredimage',
        'body',
        'publish',
        'author',
        'tags',
    ];
}
