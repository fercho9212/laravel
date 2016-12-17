<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDriversTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('drivers', function(Blueprint $table)
		{
			$table->foreign('messages_id', 'fk_dri_mes')->references('id')->on('messages')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('states_id', 'fk_dri_states')->references('id')->on('states')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('drivers', function(Blueprint $table)
		{
			$table->dropForeign('fk_dri_mes');
			$table->dropForeign('fk_dri_states');
		});
	}

}
