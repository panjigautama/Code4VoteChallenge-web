<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserVotesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_votes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->unsignedInteger('socmed_id');
			$table->string('unique_id');
			$table->unsignedInteger('candidate_id');
			$table->string('name')->nullable();
			$table->string('email')->nullable();
			$table->string('location')->nullable();
			$table->string('message')->nullable();
			$table->tinyInteger('is_anonymous')->default(0);
			$table->tinyInteger('sex_id')->default(3);
			$table->date('birthdate')->nullable();
			$table->timestamps();
			$table->softDeletes();
		});

		Schema::table('user_votes', function($table)
		{
			$table->foreign('socmed_id')->references('id')->on('socmeds')->onUpdate('cascade')->onDelete('restrict');
			$table->foreign('candidate_id')->references('id')->on('candidates')->onUpdate('cascade')->onDelete('restrict');
		});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_votes');
	}

}
