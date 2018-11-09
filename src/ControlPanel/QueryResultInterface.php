<?php
declare (strict_types=1);

namespace SmartHome\ControlPanel;

interface QueryResultInterface
{
    /**
     * Returns key-value array result data.
     *
     * @return array
     */
    public function getResultData(): array;
}
