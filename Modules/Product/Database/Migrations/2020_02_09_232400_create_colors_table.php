<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateColorsTable extends Migration {

	public function up()
	{
		Schema::create('colors', function(Blueprint $table) {
			$table->increments('id');
			$table->string('value',20);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('colors');
	}
}