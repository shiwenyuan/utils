<?php


namespace config\plugin\shiwenyuan\utils;


class HeaderUtils
{
    public static function getAll(): array
    {
        return request()->header();
    }

    public static function setHeader($key, $value): void
    {
        request()->setHeader($key, $value);
    }

    public static function get($key): ?string
    {
        return request()->header($key, null);
    }
}