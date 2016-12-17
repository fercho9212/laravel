<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToVehiclesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('vehicles', function(Blueprint $table)
		{
			$table->foreign('classdri_id', 'fk_veh_class')->references('id')->on('classdri')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('states_id', 'fk_vehicles_states')->references('id')->on('states')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('vehicles', function(Blueprint $table)
		{
			$table->dropForeign('fk_veh_class');
			$table->dropForeign('fk_vehicles_states');
		});
	}

}
