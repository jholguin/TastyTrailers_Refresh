<?php

use Illuminate\Database\Migrations\Migration;

class CreateTrailerFoodTypeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::make('trailer_food_type', function($table){
			$table->increments('id');
			$table->foreign('trailer_id')->references('id')->on('trailers');
			$table->foreign('food_type_id')->references('id')->on('food_types');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('trailer_food_type');
	}

}