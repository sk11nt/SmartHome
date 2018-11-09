<?php
declare (strict_types=1);

namespace SmartHome\Bathroom\Toilet\Cersanit;

use SmartHome\Bathroom\Toilet\Features\TemperatureMeasurableInterface;
use SmartHome\Bathroom\Toilet\ToiletInterface;

/** This toilet supports water temperature measurement functionality. */
class OlimpiaSeries implements ToiletInterface, TemperatureMeasurableInterface
{
    /**
     * {@inheritdoc}
     */
    public function getWaterTemperature(): int
    {
        // Some magic goes here.
    }
}
