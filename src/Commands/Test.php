<?php

namespace App\Commands;

use Devdot\Cli\Traits\ForceTrait;

class Test extends Command
{
    use ForceTrait;

    protected function handle(): int
    {
        return 0;
    }
}
