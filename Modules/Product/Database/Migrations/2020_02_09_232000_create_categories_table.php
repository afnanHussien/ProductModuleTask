<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration {

	public function up()
	{
		Schema::create('categories', function(Blueprint $table) {
			$table->increments('id');
			$table->string('title', 255)->index();
			$table->longText('description')->nullable();
			$table->string('image', 255)->nullable();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('categories');
	}
}