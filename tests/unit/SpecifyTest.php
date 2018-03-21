<?php
namespace Tests\Unit;

use Codeception\Specify;
use Codeception\Test\Unit;

class SpecifyTest extends Unit
{
    use Specify;
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
    public function withSpecify_Success()
    {
        $this->specify("Success test", function(){
            $this->assertEquals(2, 1 + 1); // success
        });
    }

    /**
     * @test
     */
    public function withSpecify_Failure()
    {
        $this->specify("Maybe this test will fail but codeception plugin marks it success.", function(){
            $this->assertEquals(11, 1 + 1); // fail
        });
    }
}