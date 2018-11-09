<?php
declare (strict_types=1);

namespace SmartHome\Bathroom\Toilet\Features;

interface TemperatureMeasurableInterface
{
    /**
     * Measures water temperature in celsius scale.
     *
     * @return float
     */
    public function getWaterTemperature(): float;
}
