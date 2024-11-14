<?php

namespace src\Controllers;

use Breer\framework\Http\Response;

class DefaultController{
    public function index(): Response {
        return new Response;
    }
}