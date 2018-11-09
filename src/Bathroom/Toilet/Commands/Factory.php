<?php
declare (strict_types=1);

namespace SmartHome\Bathroom\Toilet\Commands;

use SmartHome\ControlPanel\CommandInterface;

class Factory
{
    /**
     * @param string $cmdName
     * @param array $args
     * @return CommandInterface
     */
    public static function createCommand(string $cmdName, array $args): CommandInterface
    {
        switch (true) {
            case $cmdName === FlushWater::getName():
                return static::createFlushWaterCommand($args);
            default:
                throw new \InvalidArgumentException('Command "%s" isn\'t supported.', $cmdName);
        }
    }

    /**
     * @param array $args
     * @return CommandInterface
     */
    private static function createFlushWaterCommand(array $args): CommandInterface
    {
        return FlushWater::build($args);
    }
}
