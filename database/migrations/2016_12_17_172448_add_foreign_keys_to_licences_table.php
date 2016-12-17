<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToLicencesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('licences', function(Blueprint $table)
		{
			$table->foreign('category_id', 'fk_lic_cat')->references('id')->on('categories')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id', 'fk_lic_dri')->references('id')->on('drivers')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('types_id', 'fk_lic_typ')->references('id')->on('types')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('licences', function(Blueprint $table)
		{
			$table->dropForeign('fk_lic_cat');
			$table->dropForeign('fk_lic_dri');
			$table->dropForeign('fk_lic_typ');
		});
	}

}
