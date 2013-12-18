<?php

use Illuminate\Database\Migrations\Migration;

class CreateFoodTypesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::make('food_types', function($table){
			$table->increments('id');
			$table->string('food_type', 100);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('food_types');
	}

}