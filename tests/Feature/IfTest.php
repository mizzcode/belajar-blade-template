<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IfTest extends TestCase
{
    public function testIf()
    {
        $this->view('if', [
            'hobbies' => [
                'Coding'
            ]
        ])->assertSeeText('saya punya 1 hobby');

        $this->view('if', [
            'hobbies' => [
                'Coding',
                'Gaming',
            ]
        ])->assertSeeText('saya punya lebih dari 1 hobby');

        $this->view('if', [
            'hobbies' => []
        ])->assertSeeText('saya tidak punya hobby');
    }
}
