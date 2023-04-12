<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class InheritanceTest extends TestCase
{
    public function testInheritance()
    {
        $this->view('child')
            ->assertSee('Template Inheritance')
            ->assertSee('Deskripsi Header')
            ->assertSee('Deskripsi Content');
    }

    public function testInheritanceWithoutOverride()
    {
        $this->view('child-default')
            ->assertSee('Template Inheritance')
            ->assertDontSee('Deskripsi Header')
            ->assertDontSee('Deskripsi Content')
            ->assertSee('Default Header')
            ->assertSee('Default Content');
    }
}