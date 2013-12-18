<?php

use Illuminate\Database\Migrations\Migration;

class CreateTrailerLocationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::make('trailer_location', function($table){
			$table->increments('id');
			$table->foreign('trailer_id')->references('id')->on('trailers');
			$table->foreign('location_id')->references('id')->on('locations');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('trailer_location');
	}

}