<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class UserDetail extends Model
{
	use Notifiable;

    protected $table = 'user_details';
    protected $fillable = [
	'fullname', 'notelp', 'placebirth', 'datebirth', 'address', 'user_id', 'sipi', 'sipi_status'
	];

	public static function valid() {
	return array(
		'fullname' => 'required',
		'notelp' => 'required',
		'placebirth' => 'required',
		'datebirth' => 'required',
		'address' => 'required',
		'sipi' => 'required',
		);
	}

	public function user() {
		return $this->belongsTo('App\User', 'user_id');
		}
}
