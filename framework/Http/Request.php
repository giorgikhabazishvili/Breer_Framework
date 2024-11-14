<?php

namespace Breer\framework\Http;

class Request{
    public function __construct(
        public readonly array $getParams,
        public readonly array $postParams,
        public readonly array $cookies,
        public readonly array $files,
        public readonly array $server
    )
    {}

    public static function getFromGlobals(): static
    {
        return new static($_GET,$_POST,$_COOKIE,$_FILES,$_SERVER);
    }
}