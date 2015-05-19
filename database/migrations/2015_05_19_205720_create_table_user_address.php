<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUserAddress extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_address', function(Blueprint $table)
		{
			$table->integer('user_id')
	              ->unsigned()
	              ->index();
	        $table->foreign('user_id')
	              ->references('user_id')
	              ->on('users')
	              ->onDelete('cascade');
	        
	        $table->integer('address_id')
	              ->unsigned()
                 ->index();
	        $table->foreign('address_id')
                  ->references('address_id')
                  ->on('addresses')
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
		Schema::drop('user_address');
	}

}