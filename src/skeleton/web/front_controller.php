<?php

require_once __DIR__.'/../{{ path }}/{{ class }}Kernel.php';

use Symfony\Component\HttpFoundation\Request;

$kernel = new {{ class }}Kernel('prod', false);
$kernel->handle(Request::createFromGlobals())->send();
