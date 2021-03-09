<?php

namespace Jrmadsen67\OneRosterApi\Tests;

use Orchestra\Testbench\TestCase;
use Jrmadsen67\OneRosterApi\OneRosterApiServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [OneRosterApiServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
