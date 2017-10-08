<?php
/**
 * Created by PhpStorm.
 * User: scott
 * Date: 07/10/2017
 * Time: 01:28
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentHistory extends Model
{
    protected $table = 'payment_history';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'type',
        'integration',
        'reference',
        'saleid',
        'amount',
        'currency',
        'paymentMethod',
    ];
}