<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class Sprint1ApiTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_search_province(){
        $response = $this->get('api/search/province', ['id' => '3']);
        $response = $this->withoutExceptionHandling()->get('api/search/province', ['id' => '3']);
        $response->assertStatus(200);
    }

    public function test_search_city(){
        $response = $this->get('api/search/city', ['id' => '3']);
        $response = $this->withoutExceptionHandling()->get('api/search/city', ['id' => '3']);
        $response->assertStatus(200);
    }
}
