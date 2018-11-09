<?php
namespace SmartHome\Bathroom\Toilet\Queries;


use SmartHome\ControlPanel\QueryInterface;

class GetWaterTemperature implements QueryInterface
{
    private const QUERY_NAME = 'Get water temperature';

    /**
     * {@inheritdoc}
     */
    public static function getName(): string
    {
        return static::QUERY_NAME;
    }
}