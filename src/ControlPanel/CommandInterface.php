<?php
declare (strict_types=1);

namespace SmartHome\ControlPanel;

interface CommandInterface
{
    /**
     * Returns command name.
     *
     * @return string
     */
    public static function getName(): string;

    /**
     * Returns key-value array with command arguments anf values.
     *
     * @return array
     */
    public function getArgs(): array;

    /**
     * Initiates a command with a key-value array of arguments and values.
     *
     * @param array $argValues
     * @return CommandInterface
     */
    public static function build(array $argValues): CommandInterface;
}
