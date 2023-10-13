<?php


if (!function_exists('user_id')) {
    function user_id()
    {
        return auth()->user()->id;
    }
}

if (!function_exists('route_name')) {
    function route_name($name)
    {
        $route_name = auth()->user()->user_type . $name;
        return $route_name;
    }
}

if (!function_exists('user_name')) {
    function user_name()
    {
        $name = auth()->user()->first_name . auth()->user()->middle_name . auth()->user()->last_name;
        return $name;
    }
}