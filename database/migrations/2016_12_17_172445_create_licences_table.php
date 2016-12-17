<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLicencesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('licences', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('lic_no', 20);
			$table->date('lic_validity');
			$table->integer('category_id')->index('fk_lic_cat');
			$table->integer('types_id')->index('fk_lic_typ');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('licences');
	}

}
