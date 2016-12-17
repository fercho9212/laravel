<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('usu_mail', 45);
			$table->string('usu_name', 30);
			$table->string('usu_last', 35);
			$table->string('usu_phone', 12);
			$table->string('usu_username', 30)->default('');
			$table->text('usu_password');
			$table->text('usu_location', 65535)->nullable();
			$table->integer(' payments_id')->default(0);
			$table->integer('states_id');
			$table->float('usu_qual', 10, 0)->default(5);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
