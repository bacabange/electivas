<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Estudiante extends Model
{
	protected $fillable = ['nombre', 'codigo'];
	protected $table = 'estudiante';
	protected $dates = ['deleted_at'];

	public function materia()
	{
		return $this->belongsToMany('App\Materia', 'materia_estudiante', 'id_estudiante', 'id_materia');
	}
}