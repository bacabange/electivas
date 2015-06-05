<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Profesor extends Model
{
	protected $fillable = ['nombre'];
	protected $table = 'profesor';
	protected $dates = ['deleted_at'];

	public function materia()
	{
		return $this->hasMany('App\Materia', 'id_profesor');
	}
}