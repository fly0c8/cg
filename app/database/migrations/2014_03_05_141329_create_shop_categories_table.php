<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopCategoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('shopcategories', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('shop_id');
			$table->integer('category_id');
			$table->timestamps();

			//$table->foreign('shop_id')->references('id')->on('shops');

			//$table->foreign('category_id')->references('id')->on('categories');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('shopcategories');
	}

}
