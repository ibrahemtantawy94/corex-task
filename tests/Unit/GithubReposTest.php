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
        $response = $this->getJson('/github');
        $response->assertStatus(200);
        $response->assertJson(["incomplete_results" => true]);
    }

}
