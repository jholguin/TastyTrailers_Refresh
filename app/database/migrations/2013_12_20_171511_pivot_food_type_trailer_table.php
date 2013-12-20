<?php

use Illuminate\Database\Migrations\Migration;

class PivotFoodTypeTrailerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('food_type_trailer', function($table) {
			$table->increments('id');
			$table->integer('food_type_id')->unsigned()->index();
			$table->integer('trailer_id')->unsigned()->index();
			$table->foreign('food_type_id')->references('id')->on('food_types')->onDelete('cascade');
			$table->foreign('trailer_id')->references('id')->on('trailers')->onDelete('cascade');
		});
	}



	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('food_type_trailer');
	}

}
