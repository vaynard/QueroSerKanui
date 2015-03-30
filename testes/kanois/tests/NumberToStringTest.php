<?php

namespace tests;

use PHPUnit_Framework_TestCase as PHPUnit;
use Kanui\Kanois\NumberToString;

class NumberToStringTest extends PHPUnit
{
    protected $numberToString;

    public function setUp()
    {
        $this->numberToString = new NumberToString();
    }

    public function testIfClassNumberToStringHaveMethodNumberIsDivisibleByFive()
    {
        $methodExists = method_exists(
            $this->numberToString,
            'numberIsDivisibleByFive'
        );

        $this->assertTrue($methodExists);
    }

    public function testIfClassNumberToStringHaveMethodNumberIsDivisibleBySeven()
    {
        $methodExists = method_exists(
            $this->numberToString,
            'numberIsDivisibleBySeven'
        );

        $this->assertTrue($methodExists);
    }

    public function testIfClassNumberToStringHaveMethodNumberIsDivisibleByFiveAndSeven()
    {
        $methodExists = method_exists(
            $this->numberToString,
            'numberIsDivisibleByFiveAndSeven'
        );

        $this->assertTrue($methodExists);
    }

    public function testIfClassNumberToStringHaveMethodNumberToStringReturnIfNumberIsDivisibleByFiveOrSevenOrBoth()
    {
        $methodExists = method_exists(
            $this->numberToString,
            'numberToStringReturnIfNumberIsDivisibleByFiveOrSevenOrBoth'
        );

        $this->assertTrue($methodExists);
    }

    /**
     * @expectedException Exception
     */
    public function testReceivedInvalidValueInMethodNumberIsDivisibleByFive()
    {
        $this->numberToString->numberIsDivisibleByFive('A');
    }

    /**
     * @expectedException Exception
     */
    public function testReceivedInvalidValueInMethodNumberIsDivisibleBySeven()
    {
        $this->numberToString->numberIsDivisibleBySeven('A');
    }

    /**
     * @expectedException Exception
     */
    public function testReceivedInvalidValueInMethodNumberIsDivisibleByFiveAndSeven()
    {
        $this->numberToString->numberIsDivisibleByFiveAndSeven('A');
    }

    /**
     * @expectedException Exception
     */
    public function testReceivedInvalidValueInMethodNumberToStringReturnIfNumberIsDivisibleByFiveOrSevenOrBoth()
    {
        $this->numberToString
            ->numberToStringReturnIfNumberIsDivisibleByFiveOrSevenOrBoth('A');
    }

    public function testVerifyIfTheReceivedNumberIsDivisibleByFive()
    {
        $resultNumberIsDivisibleByFive = $this->numberToString
            ->numberIsDivisibleByFive(5);

        $this->assertEquals(0, $resultNumberIsDivisibleByFive);
    }

    public function testVerifyIfTheReceivedNumberIsDivisibleBySeven()
    {
        $resultNumberIsDivisibleBySeven = $this->numberToString
            ->numberIsDivisibleBySeven(7);

        $this->assertEquals(0, $resultNumberIsDivisibleBySeven);
    }

    public function testVerifyIfTheReceivedNumberIsDivisibleByFiveAndSeven()
    {
        $resultNumberIsDivisibleByFiveAndSeven = $this->numberToString
            ->numberIsDivisibleByFiveAndSeven(35);

        $this->assertEquals(0, $resultNumberIsDivisibleByFiveAndSeven);
    }

    public function testVerifyIfTheReturnValueIsInteger()
    {
        $returnStringEqualsInteger = $this->numberToString
            ->numberToStringReturnIfNumberIsDivisibleByFiveOrSevenOrBoth(1);

        $this->assertTrue(is_integer($returnStringEqualsInteger));
    }

    public function testVerifyIfTheReturnValueIsString()
    {
        $returnStringEqualsKaNois = $this->numberToString
            ->numberToStringReturnIfNumberIsDivisibleByFiveOrSevenOrBoth(35);

        $this->assertTrue(is_string($returnStringEqualsKaNois));
    }

    public function testVerifyIfTheReturnValueIsEqualsStringKa()
    {
        $returnStringEqualsKa = $this->numberToString
            ->numberToStringReturnIfNumberIsDivisibleByFiveOrSevenOrBoth(5);

        $this->assertEquals('Ka', $returnStringEqualsKa);
    }

    public function testVerifyIfTheReturnValueIsEqualsStringNois()
    {
        $returnStringEqualsNois = $this->numberToString
            ->numberToStringReturnIfNumberIsDivisibleByFiveOrSevenOrBoth(7);

        $this->assertEquals('Nois', $returnStringEqualsNois);
    }

    public function testVerifyIfTheReturnValueIsEqualsStringKanois()
    {
        $returnStringEqualsKaNois = $this->numberToString
            ->numberToStringReturnIfNumberIsDivisibleByFiveOrSevenOrBoth(35);

        $this->assertEquals('KaNois', $returnStringEqualsKaNois);
    }

    public function tearDown()
    {

    }
}
