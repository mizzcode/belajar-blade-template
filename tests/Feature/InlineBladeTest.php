<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Blade;
use Tests\TestCase;

class InlineBladeTest extends TestCase
{
    public function testInlineBlade()
    {
        $response = Blade::render('Hello {{$name}}', ['name' => 'Mizz']);

        self::assertEquals("Hello Mizz", $response);
    }
}
