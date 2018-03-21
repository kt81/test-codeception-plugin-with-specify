<?php
namespace Tests\Unit;

use Codeception\Test\Unit;

class ClosureTest extends Unit
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
    public function withAnonymous_Success()
    {
        (function () {
            $this->assertEquals(2, 1 + 1); // success
        })();
    }

    /**
     * @test
     */
    public function withAnonymous_Failure()
    {
        (function () {
            $this->assertEquals(11, 1 + 1); // fail
        })();
    }

}