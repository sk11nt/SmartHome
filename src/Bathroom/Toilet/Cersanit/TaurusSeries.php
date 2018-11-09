<?php
declare (strict_types=1);

namespace SmartHome\Bathroom\Toilet\Cersanit;

use SmartHome\Bathroom\Toilet\Features\FlushableInterface;
use SmartHome\Bathroom\Toilet\Features\TemperatureMeasurableInterface;
use SmartHome\Bathroom\Toilet\ToiletInterface;

/** This toilet supports automatic water flushing and water temperature measurement functionality. */
class TaurusSeries implements ToiletInterface, TemperatureMeasurableInterface, FlushableInterface
{
    /**
     * {@inheritdoc}
     */
    public function flush(): bool
    {
        // Some magic goes here.
    }

    /**
     * {@inheritdoc}
     */
    public function getWaterTemperature(): float
    {
        // Some magic goes here.
    }
}
