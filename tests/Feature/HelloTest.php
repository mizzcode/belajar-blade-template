<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HelloTest extends TestCase
{
    public function testHello()
    {
        $this->get('/hello')->assertSeeText('Laravel');
    }
    public function testHelloWorldNestedFolder()
    {
        $this->get('/world')->assertSeeText('Hello World');
    }

    // tanpa route
    public function testHelloView()
    {
        $this->view('hello', [
            'name' => 'Mizz'
        ])->assertSeeText('Mizz');
    }
    public function testHelloWorldView()
    {
        $this->view('hello.world', [
            'world' => 'Hello World'
        ])->assertSeeText('Hello World');
    }
}
