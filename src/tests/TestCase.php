<?php

namespace Iseerg\TopWords\Tests;

use Iseerg\TopWords\TopWordsServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    public function setUp(): void
    {
        parent::setUp();
        // additional setup
    }

    protected function getPackageProviders($app)
    {
        return [
            TopWordsServiceProvider::class,
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
        // perform environment setup
    }
}
