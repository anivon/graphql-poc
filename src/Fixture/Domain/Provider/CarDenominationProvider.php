<?php

namespace Fixture\Domain\Provider;

/**
 * @author Alexis NIVON <anivon@alexisnivon.fr>
 */
class CarDenominationProvider
{
    public static function randomCarDenomination()
    {
        $denominations = [
            'BMW M3',
            'BMW X6',
            'BMW X4',
            'AUDI A3',
            'AUDI RS4',
            'AUDI RS6',
            'AUDI R8',
        ];

        return $denominations[array_rand($denominations, 1)];
    }
}
