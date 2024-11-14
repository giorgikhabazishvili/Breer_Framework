<?php

namespace Breer\framework\Core;

use Breer\framework\Http\Request;
use Breer\framework\Http\Response;

class Kernel{
    public function handle(Request $request): Response{
        return new Response;
    }
}