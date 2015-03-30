<?php

namespace Kanui\Kanois;

/**
 * Class HundredNumberRange
 * @package Kanui\Kanois
 */
class HundredNumberRange
{
    /**
     * Validation class numbers
     * @var NumberToString
     */
    protected $numberToString;

    /**
     * Class constructor
     */
    public function __construct()
    {
        $this->numberToString = new NumberToString();
    }

    /**
     * Get Hundred Number Range With String If Exists
     * @return array Return array of numbers or string, following criteria.
     */
    public function getHundredNumberRangeWithStringIfExists()
    {
        $i = 1;
        $numberRangeArray = [];

        while ($i <= 100) {
            $resultNumberToString = $this->numberToString
                ->numberToStringReturnIfNumberIsDivisibleByFiveOrSevenOrBoth($i);
            $numberRangeArray[$i] = $resultNumberToString;
            $i++;
        }

        return $numberRangeArray;
    }
}
