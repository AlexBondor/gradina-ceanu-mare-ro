<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableOrders extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('orders', function(Blueprint $table)
		{
			$table->increments('order_id');

			$table->integer('user_id')
	              ->unsigned()
	              ->index();
	        $table->foreign('user_id')
	              ->references('user_id')
	              ->on('users')
	              ->onDelete('cascade');
	        $table->string('status');
	        $table->double('price', 15, 8);
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
		Schema::drop('orders');
	}

}
