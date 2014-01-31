<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAlumnisTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('alumnis', function(Blueprint $table) {
			$table->increments('id');
			$table->string('studentid')->unique();
			$table->string('firstname');
			$table->string('middlename');
			$table->string('lastname');
			$table->string('gender');
			$table->string('birthday');
			$table->string('address');
			$table->string('contact');
			$table->string('course');
			$table->string('batch');
			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')
					->references('id')
					->on('users')
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
		Schema::drop('alumnis');
	}

}
