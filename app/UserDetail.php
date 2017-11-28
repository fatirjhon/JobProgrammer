<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    protected $fillable = [
	'fullname', 'notelp', 'placebirth', 'datebirth', 'address'
	];

	public static function valid() {
	return array(
	'fullname' => 'required',
	'notelp' => 'required',
	'placebirth' => 'required',
	'datebirth' => 'required',
	'address' => 'required',
	);
	}

	// public function comments() {
	// return $this->hasMany('App\Comment', 'article_id');
	// }
}
