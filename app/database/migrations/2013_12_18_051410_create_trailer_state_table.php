<?php

use Illuminate\Database\Migrations\Migration;

class CreateTrailerStateTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::make('trailer_state', function($table){
			$table->increments('id');
			$table->foreign('trailer_id')->references('id')->on('traielrs');
			$table->foreign('state_id')->references('id')->on('states');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('trailer_state');
	}

}