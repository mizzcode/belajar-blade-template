<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FormTest extends TestCase
{
    public function testForm()
    {
        $this->view('form', ['user' => [
            'name' => 'mizz',
            'premium' => true,
            'admin' => true,
        ]])
            ->assertSee('mizz')->assertSee("checked")->assertDontSee('readonly');

        $this->view('form', ['user' => [
            'name' => 'mizz',
            'premium' => false,
            'admin' => false,
        ]])
            ->assertSee('mizz')->assertDontSee("checked")->assertSee('readonly');
    }
}