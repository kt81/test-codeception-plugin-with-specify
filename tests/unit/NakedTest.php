<?php
namespace Tests\Unit;

use Codeception\Test\Unit;

class NakedTest extends Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;
    
    protected function _before()
    {
    }

    protected function _after()
    {
    }

    /**
     * @test
     */
    public function withoutAnyAnonymousFunction_Success()
    {
        $this->assertEquals(2, 1 + 1); // success
    }

    /**
     * @test
     */
    public function withoutAnyAnonymousFunction_Failure()
    {
        $this->assertEquals(11, 1 + 1); // fail
    }
}