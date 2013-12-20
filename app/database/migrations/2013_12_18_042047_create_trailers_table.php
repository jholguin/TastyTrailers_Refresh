<?php

use Illuminate\Database\Migrations\Migration;

class CreateTrailersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trailers', function($table){
			$table->increments('id');
			$table->string('name', 256);
			$table->text('description');			
			$table->string('country', 100);
			$table->string('address1', 256);
			$table->string('address2', 100);
			$table->string('city', 100);
			$table->string('state', 5);
			$table->string('phone', 20);
			$table->string('website', 256);
			$table->string('twitter', 100);
			$table->string('facebook', 100);
			$table->boolean('confirmed')->default(false);
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('trailers');
	}

}