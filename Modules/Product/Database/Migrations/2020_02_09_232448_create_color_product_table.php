<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateColorProductTable extends Migration {

	public function up()
	{
		Schema::create('color_product', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->timestamps();
			$table->unsignedBigInteger('product_id');
			$table->unsignedInteger('color_id');
			$table->decimal('price')->default('0.0');

			$table->foreign('product_id')->references('id')->on('products')
                ->onDelete('cascade')
                ->onUpdate('cascade');
			$table->foreign('color_id')->references('id')->on('colors')
                ->onDelete('cascade')
                ->onUpdate('cascade');
		});
	}

	public function down()
	{
		Schema::drop('product_color');
	}
}