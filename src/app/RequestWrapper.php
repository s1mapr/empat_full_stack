<?php

namespace app;

class RequestWrapper
{
    public static function get($key) {
        return $_GET[$key] ?? null;
    }

    public static function post($key) {
        return $_POST[$key] ?? null;
    }
}