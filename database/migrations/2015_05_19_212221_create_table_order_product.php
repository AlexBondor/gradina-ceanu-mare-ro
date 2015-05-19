<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableOrderProduct extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('order_product', function(Blueprint $table)
		{
			$table->integer('product_id')
	              ->unsigned()
	              ->index();
	        $table->foreign('product_id')
	              ->references('product_id')
	              ->on('products')
	              ->onDelete('cascade');
	        
	        $table->integer('order_id')
	              ->unsigned()
                 ->index();
	        $table->foreign('order_id')
                  ->references('order_id')
                  ->on('orders')
                  ->onDelete('cascade');
            $table->integer('quantity');

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
		Schema::drop('order_product');
	}

}
