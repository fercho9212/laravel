<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateImgContractTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('imgContract', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('photo', 100);
			$table->integer('enterprises_id')->index('fk_imgContrac_Enterprises');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('imgContract');
	}

}
