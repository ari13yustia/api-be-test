<?php

namespace Tests;

use App\Models\User;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Psy\Util\Str;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    protected $user;

    public function createApiToken($email){
        $user = User::where('email', $email)->first();
        return $user->createToken('myapptoken')->plainTextToken;
    }
}
