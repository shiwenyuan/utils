<?php

namespace config\plugin\shiwenyuan\utils;

use Symfony\Polyfill\Uuid\Uuid;

class TotalUtils
{
    public static function traceGenerator(): string
    {
        return Uuid::uuid_create(\UUID_TYPE_TIME);
    }
}