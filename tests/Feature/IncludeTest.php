<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IncludeTest extends TestCase
{
    public function testInclude()
    {
        $this->view('include')->assertSee('tidak ada title')->assertSee('hi');
        $this->view('include', ['title' => 'tegal'])->assertSee('tegal')->assertSee('hi')->assertDontSee('tidak ada title');
    }
}
