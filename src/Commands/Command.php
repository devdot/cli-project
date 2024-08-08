<?php

namespace App\Commands;

use App\Commands\Traits\CustomTrait;
use Devdot\Cli\Command as BaseCommand;

abstract class Command extends BaseCommand
{
    use CustomTrait;
}
