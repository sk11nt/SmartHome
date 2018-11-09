<?php
declare (strict_types=1);

namespace SmartHome\Bathroom\Toilet\Cersanit;

use SmartHome\Bathroom\Toilet\Commands\FlushWater;
use SmartHome\Bathroom\Toilet\Features\FlushableInterface;
use SmartHome\Bathroom\Toilet\Features\TemperatureMeasurableInterface;
use SmartHome\Bathroom\Toilet\Queries\GetWaterTemperature;
use SmartHome\Bathroom\Toilet\Queries\GetWaterTemperatureResult;
use SmartHome\Bathroom\Toilet\ToiletInterface;
use SmartHome\ControlPanel\CommandInterface;
use SmartHome\ControlPanel\PluggableInterface;
use SmartHome\ControlPanel\QueryInterface;
use SmartHome\ControlPanel\QueryResultInterface;

class Adapter implements PluggableInterface
{
    /** @var ToiletInterface */
    private $toilet;

    /**
     * @param ToiletInterface $toilet
     */
    public function __construct(ToiletInterface $toilet)
    {
        $this->toilet = $toilet;
    }

    /**
     * {@inheritdoc}
     */
    public function getCommandsList(): array
    {
        $commands = [];

        switch (true) {
            case $this->toilet instanceof FlushableInterface:
                array_push($commands, FlushWater::getName());
        }

        return $commands;
    }

    /**
     * {@inheritdoc}
     */
    public function getQueriesList(): array
    {
        $queries = [];

        switch (true) {
            case $this->toilet instanceof TemperatureMeasurableInterface:
                array_push($queries, GetWaterTemperature::getName());
        }

        return $queries;
    }

    /**
     * {@inheritdoc}
     */
    public function executeCommand(CommandInterface $command): void
    {
        switch (true) {
            case $command::getName() == FlushWater::getName():
                if (!$this->toilet instanceof FlushableInterface) {
                    throw new \DomainException('Command "%s" isn\'t supported on toilet "%s"', $command::getName(), get_class($this->toilet));
                }

                $this->toilet->flush();
                break;

            default:
                throw new \InvalidArgumentException('Command "%s" isn\'t supported', $command::getName());
                break;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function executeQuery(QueryInterface $query): QueryResultInterface
    {
        switch (true) {
            case $query::getName() == GetWaterTemperature::getName():
                if (!$this->toilet instanceof TemperatureMeasurableInterface) {
                    throw new \DomainException('Query "%s" isn\'t supported on toilet "%s"', $query::getName(), get_class($this->toilet));
                }

                $result = new GetWaterTemperatureResult($this->toilet->getWaterTemperature());
                break;

            default:
                throw new \InvalidArgumentException('Command "%s" isn\'t supported', $query::getName());
                break;
        }

        return $result;
    }
}
