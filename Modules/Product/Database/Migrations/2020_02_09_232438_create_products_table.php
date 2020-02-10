<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTable extends Migration {

	public function up()
	{
		Schema::create('products', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('title', 255)->index();
			$table->longText('description')->nullable();
			$table->string('image', 255)->nullable();
			$table->unsignedInteger('category_id');
			$table->timestamps();

			$table->foreign('category_id')->references('id')->on('categories')
                ->onDelete('cascade')
                ->onUpdate('cascade');
		});
	}

	public function down()
	{
		Schema::drop('products');
	}
}