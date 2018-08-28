<?php

namespace App;

use DateTime;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Laravel\Cashier\Billable;

class User extends Authenticatable
{
    use Notifiable;
    use Billable;
    use SoftDeletes;

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
        if ($subbed = $this->getLatestSubscription()) ;

        return $subbed;
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        $address = new Address();
        $data = $address->where('user_id', $this->id)->first();
        if ($data)
        {
            return $data;
        }

        return false;
    }

    /**
     * Get last updated subscription
     * @return mixed
     */
    public function getLatestSubscription()
    {
        $now = new DateTime();
        $now = $now->format('Y-m-d H:i:s');

        $subscription = DB::table('subscriptions')
            ->select(DB::raw('*'))
            ->where([
                ['user_id', '=', $this->id],
                ['ends_at', '>=', $now],
            ])
            ->orWhere([
                ['user_id', '=', $this->id],
                ['ends_at', '=', NULL]])
            ->orderBy('updated_at', 'DESC')
            ->first();
        return $subscription;
    }
}
