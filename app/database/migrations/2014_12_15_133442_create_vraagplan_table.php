<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVraagplanTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//Dit is een veel te lange naam voor deze tabel.
		Schema::create('vraagplananswers', function($table) {
			$table->increments('id');
			$table->string('naam');
			$table->boolean('planner');
			$table->longText('hoe');
			$table->longText('tips');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('vraagplananswers');
	}

}
