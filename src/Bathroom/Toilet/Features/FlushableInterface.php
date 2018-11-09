<?php
declare (strict_types=1);

namespace SmartHome\Bathroom\Toilet\Features;

interface FlushableInterface
{
    /**
     * Flushes water in toilet.
     *
     * @return bool
     */
    public function flush(): bool;
}
