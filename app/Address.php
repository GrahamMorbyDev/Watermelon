<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'address_line_one',
        'address_line_two',
        'address_line_three',
        'town',
        'country',
        'country_code',
        'postcode',
    ];
}
