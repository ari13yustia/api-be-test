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
    public function test_register(){
        $data = [
            'name' => 'Ari',
            'email' => 'ariemail@gmail.com',
            'password' => '12345',
            'password_confirmation' => '12345'
        ];
        $response = $this->post('api/register', $data);
        $response->assertStatus(201);
    }

    public function test_login(){
        $data = [
            'email' => 'ariemail@gmail.com',
            'password' => '12345',
        ];
        $response = $this->post('api/login', $data);
        $response->assertStatus(201);
    }

    // public function test_logout(){
    //     $response = $this->post('api/logout');
    //     $response->assertStatus(201);
    // }

}
