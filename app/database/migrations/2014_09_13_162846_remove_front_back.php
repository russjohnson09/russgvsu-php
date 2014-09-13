<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RemoveFrontBack extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('cards', function(Blueprint $table)
		{
			$table->dropColumn('front');
			$table->dropColumn('back');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('cards', function(Blueprint $table)
		{
			//
		});
	}

}
