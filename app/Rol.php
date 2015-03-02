<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class rol extends Model {

	protected $table = 'rol';

	/**
	 * A rol has many users
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function user()
	{
		return $this->hasMany('App\User');
	}
}
