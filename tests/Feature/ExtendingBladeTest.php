<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ExtendingBladeTest extends TestCase
{
    public function testExtending()
    {
        $this->view('extending', ['name' => 'Mizz'])->assertSeeText('Hello Mizz');
    }
}
