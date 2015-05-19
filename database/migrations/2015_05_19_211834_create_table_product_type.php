<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProductType extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('product_type', function(Blueprint $table)
		{
			$table->integer('product_id')
	              ->unsigned()
	              ->index();
	        $table->foreign('product_id')
	              ->references('product_id')
	              ->on('products')
	              ->onDelete('cascade');
	        
	        $table->integer('type_id')
	              ->unsigned()
                 ->index();
	        $table->foreign('type_id')
                  ->references('type_id')
                  ->on('type')
                  ->onDelete('cascade');

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
		Schema::drop('product_type');
	}

}
