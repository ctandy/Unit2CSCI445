<?php
class PetTableSeeder extends Seeder {

    public function run()
    {
        DB::table('pets')->delete();

        Pet::create(array('name' => 'fido', 'age' => 2, 'type' => 'dog'));
        Pet::create(array('name' => 'fluffy', 'age' => 12, 'type' => 'cat'));
        Pet::create(array('name' => 'sparkles', 'age' => 6, 'type' => 'cat'));
        Pet::create(array('name' => 'puppy', 'age' => 1, 'type' => 'dog'));
        Pet::create(array('name' => 'skittles', 'age' => 3, 'type' => 'cat'));
    }
}