<?php

namespace App\Commands;

use Devdot\Cli\Command as CliCommand;
use Devdot\Cli\Contracts\ContainerInterface;

abstract class Command extends CliCommand
{
    public function __construct(ContainerInterface $container)
    {
        parent::__construct($container);
    }
}
