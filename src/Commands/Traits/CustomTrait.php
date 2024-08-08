<?php

namespace App\Commands\Traits;

/**
 * @mixin App\Commands\Command;
 */
trait CustomTrait
{
    public function __constructCustomTrait(): void
    {
        $this->addArgument('custom');
    }
}
