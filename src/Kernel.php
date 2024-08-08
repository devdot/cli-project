<?php

namespace App;

use Devdot\Cli\Kernel as BaseKernel;

class Kernel extends BaseKernel
{
    public function __construct(string $dir = __DIR__, string $namespace = __NAMESPACE__)
    {
        parent::__construct($dir, $namespace);
    }
}
