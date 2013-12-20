<?php

use Illuminate\Database\Migrations\Migration;

class PivotLocationTrailerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('location_trailer', function($table) {
			$table->increments('id');
			$table->integer('location_id')->unsigned()->index();
			$table->integer('trailer_id')->unsigned()->index();
			$table->foreign('location_id')->references('id')->on('locations')->onDelete('cascade');
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
		Schema::drop('location_trailer');
	}

}
