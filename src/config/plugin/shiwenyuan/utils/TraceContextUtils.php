<?php


namespace config\plugin\shiwenyuan\utils;


class TraceContextUtils
{
    const TRACE_ID_KEY = "traceid";

    public static string $traceValue = "";

    public static function getCurrentTraceId()
    {
        if (!is_null(request())) {
            $traceId = HeaderUtils::get(self::TRACE_ID_KEY);
        } else {
            $traceId = self::$traceValue;
        }

        if (null === $traceId) {
            $traceId = TotalUtils::traceGenerator();
            self::setTraceId($traceId);
        }
        return $traceId;
    }

    public static function setTraceId($traceId)
    {
        if (!is_null(request())) {
            HeaderUtils::setHeader(self::TRACE_ID_KEY, $traceId);
        }
        self::$traceValue = $traceId;
    }
}