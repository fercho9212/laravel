<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdminTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('admin', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('adm_name', 35);
			$table->string('adm_last', 35);
			$table->bigInteger('adm_phone');
			$table->string('adm_mail', 40);
			$table->string('adm_username', 35);
			$table->text('adm_psw');
			$table->date('adm_date_login');
			$table->date('adm_date_out');
			$table->integer('states_id');
			$table->integer('typesuser_id')->index('typesuser_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('admin');
	}

}
