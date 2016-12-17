<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDriVehTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('dri_veh', function(Blueprint $table)
		{
			$table->foreign('links_id', 'dri_veh_ibfk_1')->references('id')->on('links')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('drivers_id', 'fk_driver')->references('id')->on('drivers')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('vehicles_id', 'fk_vehicle')->references('id')->on('vehicles')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('dri_veh', function(Blueprint $table)
		{
			$table->dropForeign('dri_veh_ibfk_1');
			$table->dropForeign('fk_driver');
			$table->dropForeign('fk_vehicle');
		});
	}

}
