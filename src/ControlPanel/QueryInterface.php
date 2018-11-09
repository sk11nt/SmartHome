<?php
declare (strict_types=1);

namespace SmartHome\ControlPanel;

interface QueryInterface
{
    /**
     * Returns query name.
     *
     * @return string
     */
    public static function getName(): string;
}
