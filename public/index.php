<?php declare(strict_types=1);

use Breer\framework\Core\Kernel;
use Breer\framework\Http\Request;

require_once dirname(__DIR__) . '/vendor/autoload.php';

$core = new Kernel();
$response = $core->handle(Request::getFromGlobals());
$response -> send();