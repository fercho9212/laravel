<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDocumentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('documents', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('vehicles_id')->index('fk_vehicles');
			$table->bigInteger('doc_no');
			$table->integer('typesdoc_id')->index('fk_docid_typesid');
			$table->date('doc_date_ex');
			$table->date('doc_date_ven');
			$table->string('doc_emisor', 30);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('documents');
	}

}
