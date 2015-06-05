<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
	protected $fillable = ['nombre', 'descripcion', 'n_cupos', 'id_usuario'];
	protected $table = 'materia';

	public function usuario()
	{
		return $this->belongsTo('App\Usuario', 'id_usuario');
	}

	public function estudiante()
	{
		return $this->belongsToMany('App\Estudiante', 'materia_estudiante', 'id_materia', 'id_estudiante');
	}
}