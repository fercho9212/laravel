<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUsuDriTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('usu_dri', function(Blueprint $table)
		{
			$table->foreign('drivers_id', 'usu_dri_ibfk_1')->references('id')->on('drivers')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('action_id', 'usu_dri_ibfk_3')->references('id')->on('action')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('users_id', 'usu_usu_ibfk')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('usu_dri', function(Blueprint $table)
		{
			$table->dropForeign('usu_dri_ibfk_1');
			$table->dropForeign('usu_dri_ibfk_3');
			$table->dropForeign('usu_usu_ibfk');
		});
	}

}
