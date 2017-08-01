<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;
use Laravel\Cashier\Billable;

class User extends Authenticatable
{
    use Notifiable;
    use Billable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'isadmin'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function isAdmin()
    {
        return $this->isadmin;
    }

    public function isMember()
    {
         if($subbed = $this->getSubscription());

        return $subbed;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        $address = new Address();
        return $address->where('user_id', $this->id)->first();
    }

    /**
     * @return mixed
     */
    public function getSubscription()
    {
        $subscription = new Subscriptions();
        return $subscription->where('user_id', $this->id)->first();
    }
}
