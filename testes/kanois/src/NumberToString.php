<?php

namespace Kanui\Kanois;

/**
 * Class NumberToString
 * @package Kanui\Kanois
 */
class NumberToString
{
    const VAR_NUMBER_FIVE = 5;
    const VAR_NUMBER_SEVEN = 7;
    const VAR_STRING_FIVE = 'Ka';
    const VAR_STRING_SEVEN = 'Nois';
    const VAR_STRING_FIVE_AND_SEVEN = 'KaNois';

    /**
     * Verify if the received number is divisible by five.
     * @param integer $number Received number.
     * @return integer Return rest of division.
     * @throws \Exception Throw exception in case received value not being a number.
     */
    public function numberIsDivisibleByFive($number)
    {
        if (!is_integer($number)) {
            throw new \Exception('The value received is not a number!');
        }
        $numberIsDivisibleByFive = $number % NumberToString::VAR_NUMBER_FIVE;

        return $numberIsDivisibleByFive;
    }

    /**
     * Verify if the received number is divisible by seven.
     * @param integer $number Received number.
     * @return integer Return rest of division.
     * @throws \Exception Throw exception in case received value not being a number.
     */
    public function numberIsDivisibleBySeven($number)
    {
        if (!is_integer($number)) {
            throw new \Exception('The value received is not a number!');
        }
        $numberIsDivisibleBySeven = $number % NumberToString::VAR_NUMBER_SEVEN;

        return $numberIsDivisibleBySeven;
    }

    /**
     * Verify if the received number is divisible by five and seven.
     * @param integer $number Received number.
     * @return integer Return rest of division.
     * @throws \Exception Throw exception in case received value not being a number.
     */
    public function numberIsDivisibleByFiveAndSeven($number)
    {
        if (!is_integer($number)) {
            throw new \Exception('The value received is not a number!');
        }
        $numberIsDivisibleByFive = $number % NumberToString::VAR_NUMBER_FIVE;
        $numberIsDivisibleBySeven = $number % NumberToString::VAR_NUMBER_SEVEN;
        $numberIsDivisibleByFiveAndSeven = $numberIsDivisibleByFive + $numberIsDivisibleBySeven;

        return $numberIsDivisibleByFiveAndSeven;
    }

    /**
     * Return a string where a divisible by five, divisible by seven or divisible by five and seven
     * returns integer when not meet these criteria.
     * @param integer $number Received number.
     * @return integer|string Return integer or string.
     * @throws \Exception Throw exception in case received value not being a number.
     */
    public function numberToStringReturnIfNumberIsDivisibleByFiveOrSevenOrBoth($number)
    {
        if (!is_integer($number)) {
            throw new \Exception('The value received is not a number!');
        }
        if (!$this->numberIsDivisibleByFiveAndSeven($number)) {
            return NumberToString::VAR_STRING_FIVE_AND_SEVEN;
        }
        if (!$this->numberIsDivisibleBySeven($number)) {
            return NumberToString::VAR_STRING_SEVEN;
        }
        if (!$this->numberIsDivisibleByFive($number)) {
            return NumberToString::VAR_STRING_FIVE;
        }

        return $number;
    }
}
