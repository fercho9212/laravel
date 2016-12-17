<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDocumentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('documents', function(Blueprint $table)
		{
			$table->foreign('typesdoc_id', 'fk_docid_typesid')->references('id')->on('typesdoc')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('vehicles_id', 'fk_vehicles')->references('id')->on('vehicles')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('documents', function(Blueprint $table)
		{
			$table->dropForeign('fk_docid_typesid');
			$table->dropForeign('fk_vehicles');
		});
	}

}
