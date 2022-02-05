<?php

namespace Tests\Unit;

use Tests\TestCase;

class GithubReposTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->getJson('/');
        $response->assertStatus(200);
    }

}
