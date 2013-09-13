<?php

class Add_Authors {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('authors')->insert(array(
			'name' => 'Adnan',
			'bio' => 'Am I a good coder actually? May be not that\'s why i can\'t get a single work done...',
			'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s')
		));
		DB::table('authors')->insert(array(
			'name' => 'tisha',
			'bio' => 'She\'s a good & hardworking coder actually',
			'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s')
		));
		DB::table('authors')->insert(array(
			'name' => 'Ovi',
			'bio' => 'Nothing to say about him!!',
			'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s')
		));
		DB::table('authors')->insert(array(
			'name' => 'Masud',
			'bio' => 'What a guy he is.. An amazing coder.',
			'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s')
		));
		DB::table('authors')->insert(array(
			'name' => 'Jaman',
			'bio' => 'he\'s a good & hardworking actually. He is gonna be a zend among us',
			'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s')
		));
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::table('authors')->delete(1);
		DB::table('authors')->delete(2);
		DB::table('authors')->delete(3);
		DB::table('authors')->delete(4);
		DB::table('authors')->delete(5);
	}

}