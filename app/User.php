<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Carbon\Carbon;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'lastname', 'firstname', 'zipcode', 'prefecturesId', 'address', 'phone', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
     * @return config pref
	 */
	public function getPrefNameAttribute() {
		return config('pref.'.$this->pref_id);
	}

	/**
	 * Slackチャンネルに対する通知をルートする
	 *
	 * @return string
	 */
	public function routeNotificationForSlack()
	{
		return $this->slack_webhook_url;
	}
}
