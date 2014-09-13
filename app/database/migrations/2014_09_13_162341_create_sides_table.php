<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSidesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sides', function(Blueprint $table)
		{
			$table->increments('id');
			
			$table->string('title',255);
			$table->string('text',900);
			$table->integer('card_id')->unsigned();
			$table->foreign('card_id')->references('id')->on('cards');
			
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
		Schema::drop('sides');
	}

}
