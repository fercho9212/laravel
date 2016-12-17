<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsuDriTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usu_dri', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('drivers_id')->index('ent_dri_ibfk_1');
			$table->integer('users_id')->index('ent_dri_ibfk_2');
			$table->integer('usu_dri_time')->default(0);
			$table->integer('action_id')->default(1)->index('action_id');
			$table->integer('usu_dri_code')->default(0);
			$table->dateTime('usu_date_start');
			$table->string('usu_dri_origin', 40)->default('');
			$table->dateTime('usu_date_end');
			$table->string('usu_dri_end', 40)->default('');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('usu_dri');
	}

}
