<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IncludeConditionTest extends TestCase
{
    public function testIncludeCondition()
    {
        $this->view('include-condition', [
            'user' => [
                'name' => 'mizz',
                'owner' => true
            ]
        ])->assertSee('Selamat datang owner')->assertSee('Selamat datang mizz');

        $this->view('include-condition', [
            'user' => [
                'name' => 'mizz',
                'owner' => false
            ]
        ])->assertDontSee('Selamat datang owner')->assertSee('Selamat datang mizz');
    }
}
