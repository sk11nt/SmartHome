<?php
declare (strict_types=1);

namespace SmartHome\Bathroom\Toilet\Commands;

use SmartHome\ControlPanel\CommandInterface;

class FlushWater implements CommandInterface
{
    private const CMD_NAME = 'Flush Water';

    private const FLUSH_TYPE_FULL = 'full';
    private const FLUSH_TYPE_HALF = 'half';

    /** @var string */
    private $flushType;

    private function __construct()
    {
    }

    /**
     * {@inheritdoc}
     */
    public static function getName(): string
    {
        return static::CMD_NAME;
    }

    /**
     * {@inheritdoc}
     */
    public function getArgs(): array
    {
        return [
            'flushType'
        ];
    }

    public static function build(array $argValues): CommandInterface
    {
        $cmd = new static();
        $cmd->setArgValues($argValues);

        return $cmd;
    }

    /**
     * {@inheritdoc}
     */
    private function setArgValues(array $argValues): void
    {
        foreach ($argValues as $argName => $argValue) {
            if (!in_array($argName, $this->getArgs())) {
                throw new \InvalidArgumentException(sprintf('Argument "\%s" is not supported in command "%s"', $argName, $this->getName()));
            }

            $this->{'set' . ucfirst($argName)}($argValue);
        }
    }

    /**
     * @param string $type
     */
    private function setFlushType(string $type): void
    {
        if (!in_array($type, [static::FLUSH_TYPE_FULL, static::FLUSH_TYPE_HALF])) {
            throw new \InvalidArgumentException(sprintf('Argument\'s "flushType" value "%s" is not supported.', $type));
        }

        $this->flushType = $type;
    }
}
