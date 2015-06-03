<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMateriaTable extends Migration {

	public function up()
	{
		Schema::create('materia', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre');
			$table->text('descripcion');
			$table->integer('n_cupos')->unsigned();
			$table->integer('id_usuario')->unsigned();
			$table->rememberToken();
			$table->timestamps();

			$table->foreign('id_usuario')->references('id')->on('usuario')->onDelete('cascade');
		});
	}

	public function down()
	{
		Schema::drop('materia');
	}

}
