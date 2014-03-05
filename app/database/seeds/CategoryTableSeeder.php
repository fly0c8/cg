<?php
class CategoryTableSeeder extends Seeder {

	public function run() {
		DB::table('categories')->delete();

		Category::create(array(
			'id' => 1,
			'category' => 'Shopping',
			'parent_id' => null
		));
		Category::create(array(
			'id' => 2,
			'category' => 'Kulinarik',
			'parent_id' => null
		));
		Category::create(array(
			'id' => 3,
			'category' => 'Gesundheit',
			'parent_id' => null
		));
		Category::create(array(
			'id' => 4,
			'category' => 'Service',
			'parent_id' => null
		));
		Category::create(array(
			'id' => 5,
			'category' => 'Kunst & Kultur',
			'parent_id' => null
		));
		Category::create(array(
			'id' => 6,
			'category' => 'Events',
			'parent_id' => null
		));


		// shopping subcategories
		Category::create(array(
			'id' => 7,
			'category' => 'Fashion & Lifestyle',
			'parent_id' => 1
		));
		Category::create(array(
			'id' => 8,
			'category' => 'Arbeiten & Wohnen',
			'parent_id' => 1
		));
		Category::create(array(
			'id' => 9,
			'category' => 'Sport & Freizeit',
			'parent_id' => 1
		));
		Category::create(array(
			'id' => 10,
			'category' => 'Blumen & Geschenke',
			'parent_id' => 1
		));
		Category::create(array(
			'id' => 11,
			'category' => 'Buch & Musik',
			'parent_id' => 1
		));




	}
}
?>

