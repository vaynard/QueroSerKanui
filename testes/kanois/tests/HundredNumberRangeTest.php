<?php

namespace tests;

use PHPUnit_Framework_TestCase as PHPUnit;
use Kanui\Kanois\HundredNumberRange;

class HundredNumberRangeTest extends PHPUnit
{
    protected $hundredNumberRange;

    public function setUp()
    {
        $this->hundredNumberRange = new HundredNumberRange();
    }

    public function testHundredNumberRangeHaveMethodGetHundredNumberRange()
    {
        $methodExistsHundredNumberRange = method_exists(
            $this->hundredNumberRange,
            'getHundredNumberRangeWithStringIfExists'
        );

        $this->assertTrue($methodExistsHundredNumberRange);
    }

    public function testCheckIfNumberRangeReturnIsArray()
    {
        $numberRangeIsArray = is_array(
            $this->hundredNumberRange->getHundredNumberRangeWithStringIfExists()
        );

        $this->assertTrue($numberRangeIsArray);
    }

    public function testCheckIfNumberRangeHaveHundredValues()
    {
        $numberRange = $this->hundredNumberRange->getHundredNumberRangeWithStringIfExists();

        $this->assertCount(100, $numberRange);
    }

    public function tearDown()
    {

    }
}
