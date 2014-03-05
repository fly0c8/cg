<?php
class CommentTableSeeder extends Seeder {
	public function run() {
		DB::table('comments')->delete();
		Comment::create(array(
			'author' => 'Arnold',
			'text' => 'This is a first test comment'
		));
		Comment::create(array(
			'author' => 'Alex',
			'text' => 'This is a second test comment'
		));
		Comment::create(array(
			'author' => 'Lena',
			'text' => 'This is a third test comment'
		));
		Comment::create(array(
			'author' => 'Vanessa',
			'text' => 'This is a fourth test comment'
		));
	}
}
?>

