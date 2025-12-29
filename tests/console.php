<?php

require $_composer_autoload_path ?? __DIR__ . '/../vendor/autoload.php';

return App\Kernel::getInstance()->getContainer()->get('application');
