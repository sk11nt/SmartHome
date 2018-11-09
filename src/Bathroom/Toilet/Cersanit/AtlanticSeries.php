<?php
declare (strict_types=1);

namespace SmartHome\Bathroom\Toilet\Cersanit;

use SmartHome\Bathroom\Toilet\Features\FlushableInterface;
use SmartHome\Bathroom\Toilet\ToiletInterface;

/** This toilet supports automatic water flushing functionality. */
class AtlanticSeries implements ToiletInterface, FlushableInterface
{
    /**
     * {@inheritdoc}
     */
    public function flush(): bool
    {
        // Some magic goes here.
    }
}
