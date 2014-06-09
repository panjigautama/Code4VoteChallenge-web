<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('CandidatesSeeder');
		$this->call('SocmedsSeeder');
		$this->call('SexSeeder');
	}

}