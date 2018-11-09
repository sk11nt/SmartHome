<?php
declare (strict_types=1);

namespace SmartHome\Bathroom\Toilet\Queries;

use SmartHome\ControlPanel\QueryInterface;

class Factory
{
    /**
     * @param string $queryName
     * @return QueryInterface
     */
    public static function createQuery(string $queryName): QueryInterface
    {
        switch (true) {
            case $queryName === GetWaterTemperature::getName():
                return static::createGetWaterTemperatureQuery();
                break;
            default:
                throw new \InvalidArgumentException('Query "%s" isn\'t supported.', $queryName);
        }
    }

    /**
     * @return GetWaterTemperature
     */
    private static function createGetWaterTemperatureQuery(): QueryInterface
    {
        return new GetWaterTemperature();
    }
}
