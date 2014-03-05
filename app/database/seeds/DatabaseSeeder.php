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

		$this->call('CommentTableSeeder');
		$this->command->info('Comment tbale seeded');

		$this->call('CategoryTableSeeder');
		$this->command->info('Category Table seeded');
	}

}
