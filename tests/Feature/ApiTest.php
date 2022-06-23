<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ApiTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    var $email = 'ariemail@gmail.com';
    public function test_register(){
        $data = [
            'name' => 'Ari',
            'email' => $this->email,
            'password' => '12345',
            'password_confirmation' => '12345'
        ];
        $response = $this->post('api/register', $data);
        $response->assertStatus(201);
    }

    public function test_login(){
        $data = [
            'email' => $this->email,
            'password' => '12345',
        ];
        $response = $this->post('api/login', $data);
        $response->assertStatus(201);
    }

    public function test_logout(){
        $response = $this->withHeaders([
            'Authorization' => 'Bearer '.$this->createApiToken($this->email),
            'Accept' => 'application/json',
        ])->post('api/logout');
        $response->assertStatus(200);
    }

    public function test_search_province(){
        $response = $this->withHeaders([
            'Authorization' => 'Bearer '.$this->createApiToken($this->email),
            'Accept' => 'application/json',
        ])->get('api/search_swap/province', ['id' => '3']);
        $response = $this->withoutExceptionHandling()->get('api/search_swap/province', ['id' => '3']);
        $response->assertStatus(200);
    }

    public function test_search_city(){
        $response = $this->withHeaders([
            'Authorization' => 'Bearer '.$this->createApiToken($this->email),
            'Accept' => 'application/json',
        ])->get('api/search_swap/city', ['id' => '3']);
        $response = $this->withoutExceptionHandling()->get('api/search_swap/city', ['id' => '3']);
        $response->assertStatus(200);
    }

}
