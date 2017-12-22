<?php

use Illuminate\Database\Seeder;
use App\Note;
use App\Category;

class NoteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$categories=Category::all();

    	//make() generea pero no guarda..
    	$notes = factory(Note::class)->times(100)->make();
    	//create() guarda en la DB
    	//factory(Note::class)->times(100)->create();
    	foreach ($notes as $note) {
    		$category=$categories->random();

    		//$note->category_id = $category->id
    		//$note -> save()
    		$category->notes()->save($note);
    	}
    }
}
