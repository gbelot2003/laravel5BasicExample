<?php namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model {

	/**
	 *
	 * @var type
	 */
	protected $fillable = [
		'title', 'user_id', 'excerpt', 'body', 'slug', 'published_at'
	];

	/**
	 *
	 * @var type
	 */
	protected $dates = ['published_at'];

	/**
	 *
	 * @param type $query
	 */
	public function scopePublished($query)
	{
		$query->where('published_at', '<=', Carbon::now());
	}

	/**
	 *  Listado de noticias no publicadas
	 * @param type $query
	 */

	public function scopeUnpublished($query)
	{
		$query->where('published_at', '>', Carbon::now());
	}

	/**
	*
	* @param type $date
	*/
	public function setPublishedAtAttribute($date)
	{
		$this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d', $date);
	}

	/**
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function user()
	{
		return $this->belongsTo('App\User');
	}

	/**
	 * Get the tags associated with the given article
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function tags()
	{
		return $this->belongsToMany('App\Tag')->withTimestamps();
	}

	/**
	 * Get a list of tags related
	 * @return mixed
	 */
	public function getTagListAttribute()
	{
		return $this->tags->lists('id');
	}
}
