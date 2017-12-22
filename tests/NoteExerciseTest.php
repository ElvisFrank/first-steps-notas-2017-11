<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Note;

class NoteExerciseTest extends TestCase
{
    use DatabaseTransactions;
    public function test_notes_sumary_and_notes_details()
    {
    	$text = 'Begin of the note. Et vitae magnam aut eum corporis excepturi. Unde eius esse quia numquam est aut. Omnis beatae deserunt ipsum aliquid maxime eius et. Vitae numquam vitae aut maxime asperiores. Et voluptatem nihil odio sunt quia adipisci at.';
    	$text .='End of the note';

    	$note = Note::create(['note'=>$text]);

    	$this->visit('notes')
    		->see('Begin of the note')
    		->seeInElement('.label','Others')
    		->dontSee('End of the note')
    		->seeLink('View note')
    		->click('View note')
    		->see($text)
    		->seeLink('View all notes', 'notes');
    }
}
