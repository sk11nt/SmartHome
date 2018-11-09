<?php
namespace SmartHome\Bathroom\Toilet\Queries;

use SmartHome\ControlPanel\QueryResultInterface;

class GetWaterTemperatureResult implements QueryResultInterface
{
    /** @var float */
    private $temperature;

    /**
     * @param float $temperature
     */
    public function __construct(float $temperature)
    {
        $this->temperature = $temperature;
    }


    /**
     * {@inheritdoc}
     */
    public function getResultData(): array
    {
        return [
            'temperature' => sprintf('%.02f °C', $this->temperature),
        ];
    }
}
