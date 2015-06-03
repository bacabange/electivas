<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	public function up()
	{
		Schema::create('usuario', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('username')->unique();
			$table->string('password', 60);
			$table->rememberToken();
			$table->timestamps();
		});
	}
	public function down()
	{
		Schema::drop('usuario');
	}

}
