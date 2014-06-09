<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollectiveTweetTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('collective_tweets', function(Blueprint $table)
		{
			$table->string('id',30);
			$table->unsignedInteger('candidate_id');
			$table->string('keyword');
			$table->string('screen_name');
			$table->string('message');
			$table->string('retweet_count');
			$table->string('favorite_count');
			$table->tinyInteger('polarity')->default(2);
			$table->timestamp('created_at');
		});

		Schema::table('collective_tweets', function($table)
		{
			$table->index('id');
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
		Schema::drop('collective_tweets');
	}

}
