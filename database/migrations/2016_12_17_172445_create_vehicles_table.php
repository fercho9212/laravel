<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVehiclesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vehicles', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('veh_placa', 7);
			$table->integer('veh_model');
			$table->string('veh_motor', 30);
			$table->integer('veh_serie');
			$table->string('veh_vin', 12);
			$table->string('veh_type', 30);
			$table->string('veh_brand', 30);
			$table->string('veh_color', 60);
			$table->string('veh_line', 60);
			$table->text('veh_observa');
			$table->integer('states_id')->default(1)->index('fk_vehicles_states');
			$table->integer('classdri_id')->default(1)->index('fk_veh_class');
			$table->timestamp('veh_date_reg')->default(DB::raw('CURRENT_TIMESTAMP'));
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('vehicles');
	}

}
