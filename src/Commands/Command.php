<?php

namespace App\Commands;

use Devdot\Cli\Command as CliCommand;

abstract class Command extends CliCommand
{
    public function __construct()
    {
        parent::__construct();
    }
}
