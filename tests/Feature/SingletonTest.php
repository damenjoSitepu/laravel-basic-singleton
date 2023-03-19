<?php

namespace Tests\Feature;

use App\Services\SingletonService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SingletonTest extends TestCase
{
    public function test_first_singleton()
    {
        $startInstance = SingletonService::instance();
        $startInstance->updateValue(10);
        $this->assertEquals(10,$startInstance->getValue(),'Failed!');
    }

    public function test_second_singleton()
    {
        $startInstance = SingletonService::instance();
        $startInstance->updateValue(20);
        $this->assertEquals(30,$startInstance->getValue(),'Failed!');
    }
}
