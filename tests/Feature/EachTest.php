<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EachTest extends TestCase
{
    public function testEach()
    {
        $this->view('each', [
            'users' => [
                [
                    'name' => 'mizz',
                    'hobbies' => ['Coding', 'Gaming']
                ],
                [
                    'name' => 'jani',
                    'hobbies' => ['Coding', 'Gaming']
                ]
            ]
        ])->assertSeeInOrder([
            ".red", "mizz", "Coding", "Gaming", "jani", "Coding", "Gaming"
        ]);
    }
}
