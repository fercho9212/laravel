<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDriversTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('drivers', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('dri_name', 40);
			$table->string('dri_last', 35);
			$table->bigInteger('dri_cc')->unique('dri_cc');
			$table->string('dri_mail', 40);
			$table->string('dri_address', 40);
			$table->bigInteger('dri_phone_one');
			$table->bigInteger('dri_phone_two');
			$table->string('dri_photo', 200);
			$table->string('dri_location', 70)->default('');
			$table->integer('messages_id')->default(1)->index('fk_dri_mes');
			$table->text('dri_psw');
			$table->float('dri_qual', 10, 0)->default(5);
			$table->integer('states_id')->nullable()->index('fk_dri_states');
			$table->timestamp('dri_date_reg')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->timestamp('dateup')->default(DB::raw('CURRENT_TIMESTAMP'));
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('drivers');
	}

}
