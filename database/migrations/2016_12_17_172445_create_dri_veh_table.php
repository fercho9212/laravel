<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDriVehTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dri_veh', function(Blueprint $table)
		{
			$table->integer('drivers_id');
			$table->integer('vehicles_id')->index('fk_vehicle');
			$table->integer('links_id')->default(1)->index('links_id');
			$table->timestamp('dv_date')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->dateTime('dv_update');
			$table->primary(['drivers_id','vehicles_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('dri_veh');
	}

}
