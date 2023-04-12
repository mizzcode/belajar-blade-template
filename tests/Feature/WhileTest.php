<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class WhileTest extends TestCase
{
    public function testWhile()
    {
        $this->view('while', ['i' => 0])
            ->assertSee('saat ini no 0')
            ->assertSee('saat ini no 1')
            ->assertSee('saat ini no 2')
            ->assertSee('saat ini no 3')
            ->assertSee('saat ini no 4')
            ->assertSee('saat ini no 5')
            ->assertSee('saat ini no 6')
            ->assertSee('saat ini no 7')
            ->assertSee('saat ini no 8')
            ->assertSee('saat ini no 9');
    }
}
