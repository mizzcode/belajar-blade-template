<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UnlessTest extends TestCase
{
    public function testUnless()
    {
        $this->view('unless', ['isAdmin' => true])->assertDontSee('kamu bukan admin');
        $this->view('unless', ['isAdmin' => false])->assertSee('kamu bukan admin');
    }
}
